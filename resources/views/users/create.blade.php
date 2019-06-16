@extends('layouts.layout')
@section('title','Add New User')
@section('content')
   <style>
   #loader{
   visibility:hidden;
   }
   </style>
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
                             <!--        <h4 class="mt-0 header-title">Textual inputs</h4>
                                    <p class="text-muted m-b-30">Here are examples of <code class="">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p> -->
                                    <form action="{{route('users.store')}}" method="post">
                                      @csrf
               <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Enter Your First Name" id="text-input" name="fname"value="{{ old('fname') }}" required></div>
            </div>

            <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Enter Your Last Name" id="example-text-input" name="lname" value="{{ old('lname') }}"></div>
            </div>

            <div class="form-group row"><label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input class="form-control" type="email" placeholder="Enter Your Email" id="example-email-input" name="email" value="{{ old('email') }}" required></div>
            </div>                                    

            
            <div class="form-group row"><label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" placeholder="Enter Your Password" id="example-password-input" name="password" required></div>
                </div>                                
                
                <div class="form-group row"><label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="tel" placeholder="Enter Your Telephone Number" id="example-tel-input" name="phone" value="{{ old('phone') }}"></div>
            </div>
                
        <div class="form-group row"><label for="example-date-input" class="col-sm-2 col-form-label">Date of Birth</label>
            <div class="col-sm-10">
            <input class="form-control" type="date" placeholder="Enter Your Date of Birth" id="example-date-input" name="dateOfBirth" value="{{ old('dateOfBirth') }}"></div>
        </div>

        <div class="form-group row"><label class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                   <select class="custom-select" name="gender">
                    <option selected disabled>choose your Gender</option>
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
    <div class="col-12 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Add New User') }}</button></div>
</div>
</form>
<!--                        <button class="btn btn-success ">Add User</button>-->
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
         <script src="{{ asset('js/app.js') }}"></script>
@endsection
