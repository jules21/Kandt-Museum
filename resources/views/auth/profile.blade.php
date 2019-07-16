@extends('layouts.layout')
@section('title', 'Profile')
    
@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">
<div class="col-sm-12">
<div class="page-title-box">
    <h4 class="page-title">Profile</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Welcome to kandt Museum Dashboard</li>
    </ol>
    @include('partials.success')
    <div class="row">

        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active show" data-toggle="tab" href="#home-1" role="tab" aria-selected="true">profile</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab" aria-selected="false">Edit</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane p-3 active show" id="home-1" role="tabpanel">
                            {{-- <div class="card-body">
                             
                            First Name: {{$user->lastName}}
                            Last Name: {{$user->firsNname}}
                            Email Addres: {{$user->email}}
                            Telephone Address: {{$user->phone}}
                            Date Of Birth: {{$user->dateOfBirth}}
                            Gender    :  {{$user->gender}}

                           
                        </div> --}}
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>First Name </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->firstName}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Last Name </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->lastName}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email Addres</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->email}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Date Of Birth
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->dateOfBirth}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Gender</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->gender}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Telephone Address</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$user->phone}}</p>
                                                </div>
                                            </div>

                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Experience</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Expert</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Hourly Rate</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>10$/hr</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Total Projects</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>230</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>English Level</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Expert</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Availability</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>6 months</p>
                                                </div>
                                            </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Your Bio</label><br/>
                                            <p>Your detail description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <form action=" {{route('manager.editProfile', $user->id)}}" method="POST">
                                                @csrf
                                                {{-- <input type="hidden" name="_method" value="PUT"> --}}
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                    <label for="inputEmail4">First Name:</label>
                                                    <input type="text" class="form-control" name="fname" value="{{$user->firstName}}">
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Email Address:</label>
                                                    <input type="email" class="form-control" name="email" value="{{$user->email}}" >
                                                  </div>
                                                </div>
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Last Name:</label>
                                                    <input type="text" class="form-control" name="lname" value="{{$user->lastName}}">
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Telephone Address:</label>
                                                    <input type="tel" class="form-control" name="phone" value="{{$user->phone}}">
                                                  </div>
                                                </div>
                                                <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Date Of Birth:</label>
                                                    <input type="date" class="form-control" name="dateOfBirth" value="{{$user->dateOfBirth}}">
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Gender:</label>
                                                    <select name="gender" id="gender" class="form-control">
                                                        <option selected disabled value="{{$user->gender}}">{{$user->gender}}</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                                              </form>
                                       
                                    </div>
                                </div><!-- end col -->
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

        
      
    
</div>
</div>
</div>


        </div>
        </div>
        </div>

@endsection