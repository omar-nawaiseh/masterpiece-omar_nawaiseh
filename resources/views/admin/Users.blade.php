@extends('admin.layouts.AdminNav')
@section('title')
Admins
@endsection



@section('body')   
                




<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Add User</h5>
            <x-jet-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('register') }}">
           
                     @csrf   
                    <div class="position-relative row form-group"><label for="exampleName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <x-jet-input id="name"  class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <x-jet-input id="email"  class="form-control" type="email" name="email" :value="old('email')" required />
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-8"> 
                            <x-jet-input id="password"  class="form-control" type="password" name="password" required autocomplete="new-password" />
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-8">
                        <x-jet-input id="password_confirmation"  class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                    </div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
        
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <button class="btn btn-secondary">{{ __('Add User') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

   
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Table with hover</h5>
            <table class="mb-0 table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($list as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>
                        <a href="/deleteu/{{ $item->id}}">
                        <button type="button" class="btn btn-danger" >
                            <i class="fas fa-trash"></i>
                                Delete
                        </button>
                        </a>
                    </td>
                    
                    <td>
                    <a href="/editu/{{ $item->id}}">
                        <button type="" class="btn btn-primary" >
                            <i class="fas fa-edit"></i>
                              Edit
                        </button>
                        </a>           
                    </td>
                </tr>
                @endforeach
                
                </tbody>
            </table>

       
        </div>
      
    </div>
                   
 @endsection


     