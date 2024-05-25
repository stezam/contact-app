<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use \App\Models\Contact;
use App\Repos\CompanyRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class ContactController extends Controller
{

    // protected $company;

    public function __construct(protected CompanyRepos $company){
        // $this->company = $company;
    }
    
    public function index(CompanyRepos $company){
        $companies = $company->pluck();
        $query  = Contact::query();

        // DB::enableQueryLog();
        $contacts  = Contact::allowedTrash()
                            ->allowedSorts(['first_name','last_name','email'],"-id")
                            ->allowedFilters('company_id')
                            ->allowedSearch('first_name','last_name','email')
                            ->paginate(10);
        // dump (DB::getQueryLog());
        return view('contacts.index',compact('contacts','companies'));
    }

    public function create(){
        // dd(request()->method());
        $companies = $this->company->pluck();
        $contact = new Contact();
        return view('contacts.create',compact('companies','contact'));
    }

    public function store(ContactRequest $request){
        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success','Contact has been added successfully!');
    }


    public function show(Contact $contact){

        // abort_if(empty($contact),404);
        return view('contacts.show')->with('contact',$contact);
    }

    public function edit(Contact $contact){
        $companies = $this->company->pluck();

        return view('contacts.edit',compact('companies', 'contact'));
    }

    public function update(ContactRequest $request, Contact $contact){
        
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('success','Contact has been updated successfully!');
    }

    public function destroy(Contact $contact){

        $contact->delete();
        $redirect = request()->query('redirect');
        return ($redirect ? redirect()->route($redirect):back())
                ->with('success','Contact has been moved to trash  successfully!')
                ->with('undoRoute', $this->getUndoRoute('contacts.restore', $contact));
    }

    public function restore(Contact $contact){
        // $contact = Contact::onlyTrashed()->findOrFail( $id);
        $contact->restore();
        return back()->with('success','Contact has been restored from trash successfully!')
                        ->with('undoRoute', $this->getUndoRoute('contacts.destroy', $contact));
    }

    protected function getUndoRoute($name, $resource){
        return request()->missing('undo') ? route($name, [$resource->id, 'undo'=> true ]) : null;
    }

    public function forceDelete(Contact $contact){
        // $contact = Contact::onlyTrashed()->findOrFail( $id );
        $contact->forceDelete();
        return back()->with('success','Contact has been removed from trash permanently!');
    }
}
