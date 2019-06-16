@extends('layouts.layout')
@section('title', 'Edit User')
@section('content')
   <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-9 offset-2">
                            <div class="card m-b-20">
                                <div class="card-body">
                                          @include('partials.success')
        @include('partials.error')
                                   <!--  <h4 class="mt-0 header-title">Textual inputs</h4>
                                    <p class="text-muted m-b-30">Here are examples of <code class="">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p> -->
                                    <form action="{{route('users.update', $user->id)}}" method="post">
                                      @csrf
                                      <input type="hidden" name="_method" value="put">
               <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$user->firstName}}" id="text-input" name="fname"></div>
            </div>

            <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                <input class="form-control" type="text" value="{{$user->lastName}}" id="example-text-input" name="lname"></div>
            </div>

            <div class="form-group row"><label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input class="form-control" type="email" value="{{$user->email}}" id="example-email-input" name="email"></div>
            </div>                                    

            <div class="form-group row"><label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                <div class="col-sm-10">
                <input class="form-control" type="tel" value="{{$user->phone}}" id="example-tel-input" name="phone"></div>
        </div>                           

        <div class="form-group row">
           <label for="example-date-input" class="col-sm-2 col-form-label">Date of Birth</label>
            <div class="col-sm-10">
            <input class="form-control" type="date" value="{{$user->dateOfBirth}}" id="example-date-input" name="dateOfBirth"></div>
        </div>

        <div class="form-group row"><label class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                   <select class="custom-select" name="gender">
                    <option selected disabled value="{{$user->gender}}">{{$user->gender}}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select></div>
        </div>
        <div class="form-group row"><label class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                   <select class="custom-select" name="role">
                    <option selected disabled>choose Role</option>
                    <option value="1">Manager</option>
                    <option value="2">user</option>
                </select></div>
        </div>


<div class="form-group row m-t-20">
    <div class="col-12 text-right"><button class="btn btn-warning w-md waves-effect waves-light" type="submit">{{ __('Update User info') }}</button></div>
</div>
</form>
<!--                        <button class="btn btn-success ">Add User</button>-->
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
        
<script>

 <script src="{{ asset('js/app.js') }}"></script>
@endsection
