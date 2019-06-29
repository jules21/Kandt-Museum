@extends('layouts.main')
@section('title', 'Reset Password')
@section('page', 'Reset Password')
@section('content')

<style>
.form-gap {
    padding-top: 70px;
}
</style>
<div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Reseting Password.</h2>
                  <p>Provide new Password</p>
                  <div class="panel-body">
    
                        <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                           </div>
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                           @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                        </div>
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                          </div>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        
                        <div class="form-group input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                          </div>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
    
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
@endsection