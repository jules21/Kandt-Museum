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
                <div class="col-md-6 col-md-offset-2">
                    <div class="card">
                      <div class="card-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                          <div class="card-body">
            
                          
                             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf            
                              <div class="form-group">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                              </div>
                              
                              <input type="hidden" class="hide" name="token" id="token" value=""> 
                            </form>
            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
</div>
@endsection
