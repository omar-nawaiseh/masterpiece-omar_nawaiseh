@extends('admin.layouts.AdminNav')
@section('title')
Admins
@endsection



@section('body')   
                

<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Edit User</h5>
            
            <form method="POST" action="{{ route('updateu') }}">
           
                     @csrf   
                     <input type="hidden" name="cid" value="{{$Info->id}}">
                    <div class="position-relative row form-group"><label for="exampleName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input id="name"  class="form-control" type="text" name="name" value="{{$Info->name}}" >
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input id="email"  class="form-control" type="email" name="email" value="{{$Info->email}}" >
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-8"> 
                            <input id="password"  class="form-control" type="password" name="password"  value="{{$Info->password}}" >
                        </div>
                    </div>
                    
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <button class="btn btn-secondary">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>

         
 @endsection


    