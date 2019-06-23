@extends('layouts.layout')
@section('title','artifacts')
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
         <!-- <div class="card-body">
                                    <h4 class="mt-0 header-title">Default Datatable</h4>
                                    <p class="text-muted m-b-30">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.</p> -->
                                    @if($artifacts->isEmpty())
                                    <p class="alert alert-info text-center">No artifact Added Yet!</p>
                                    @else
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>artifact Name</th>
                                                <th>description</th>
                                                <th>photo</th>
                                                <th>Year</th>
                                                <th>category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($artifacts as $artifact)
                                             <tr>
                                                <th>{{$artifact->name}}</th>
                                                <th>{{ str_limit($artifact->description, $limit = 75, $end = '...') }}</th>
                                                <th><img src="{{asset('images/artifacts')}}/{{$artifact->photo}}" height="100" width="150"></th>
                                                <th>{{$artifact->year}}</th>
                                                <th>{{$artifact->artifactCategory->name}}</th>
                                                <td>

                                                    <a href="{{route('artifact.edit', [$artifact->id])}}"><i class="ion-edit" style="font-size:20px;"></i></a>&nbsp;&nbsp;
                               <!---->
<form action="{{route('artifact.destroy',[$artifact->id])}}" method="post" class="d-inline">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
    <button class="btn" type="submit" onclick="return confirm('Are you sure?')"><i class="ion-ios7-close-outline" style="font-size:20px;"></i></button>
          </form>

<!---->

                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div></div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- container-fluid -->
            </div><!-- content -->

  
@endsection

