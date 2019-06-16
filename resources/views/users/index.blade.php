@extends('layouts.layout')
@section('title', 'All Users')
@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                          @include('partials.success')
        @include('partials.error')
                                  <!--   <h4 class="mt-0 header-title">Default Datatable</h4>
                                    <p class="text-muted m-b-30">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.</p> -->
                                    @if($users->isEmpty())
                                    <p class="alert alert-info">No. of Users found: 0</p>
                                    @else
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                          
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>phone</th>
                                                <th>email</th>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                
                                                <th>action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                      @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->firstName}}</td>
                                                <td>{{$user->lastName}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->gender}}</td>
                                                <td>{{$user->dateOfBirth}}</td>
                                                <td>
<!--                                                    <a href="{{--route('users.show', [$user->id])--}}" class="btn btn-success">show</a>-->
                                                    <a href="{{route('users.edit', [$user->id])}}" class="btn btn-info">edit</a>
                                            <!---->
<form action="{{route('users.destroy', [$user->id])}}" method="post" class="d-inline">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
          </form>

<!---->

                                            </tr>
                                            @endforeach
                  
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- container-fluid -->
            </div>
            <!-- content -->
        </div>
  
@endsection
