@extends('layouts.main')
@section('content')
<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">
                      All Contacts
                      @if(request()->query('trash'))
                      <small>(In Trash)</small>
                      @endif
                    </h2>
                    <div class="ml-auto">
                      <a href="{{route('contacts.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class = "card-body">
                
                @include('contacts._filter')
                @if ($success = session('success'))
                  <div class="alert alert-success">
                    {{ $success }}
                    @if($undoRoute = session('undoRoute'))
                      <form action="{{$undoRoute}}" method="POST" style="display: inline;">
                          @csrf
                          @method('delete')
                          <button class="btn alert-link">Undo</button>
                      </form>
                    @endif                    
                  </div>
                @endif
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th>
                        {!! sortable("First Name") !!}                        
                      </th>
                      <th scope="col">
                        {!! sortable("Last Name") !!}   
                      </th>
                      <th scope="col">
                        {!! sortable("Email") !!}   
                      </th>
                      <th scope="col">Company</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $showTrashButtons = request()->query('trash')? true : false;
                    @endphp
                     @forelse ($contacts as  $index => $contact)
                        @include('contacts._contact', ['contact'=> $contact, 'index'=> $index ])
                      @empty
                        @include('contacts._empty')
                      @endforelse
                  </tbody>
                </table> 

                {{$contacts->withQueryString()->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection
@section('title', 'Contact-App | All Contacts')