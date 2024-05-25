<?php

namespace App\Http\Requests;

use App\Models\Contact;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // dd($this->route("contact"));
        // dd($this->method());
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $contact = $this->route('contact'); // Assuming you're passing the contact ID through the route
        // $contact = Contact::find($contactId);
        return [
            'first_name'    => 'required|string|max:50',
            'last_name'     => 'required|string|max:50',
            'email'         => 'required|email|unique:contacts,email,' . ($contact ? $contact->id : null),
            // 'email'         => 'required|email|unique:contacts,email',
            'phone'         => 'nullable',
            'address'       => 'nullable',
            'company_id'    => 'required|exists:companies,id',
        ];
    }
    public function attributes(): array{
        return [
            'company_id' => 'Company',
        ];
    }

    public function messages(): array{
        return [
            'email.email'   => 'The email that you entered is not valid !',
            '*.required'    => ':attribute cannot be empty !',    
        ];
    }
}
