@extends('layouts.layout')
@section('title',' booked exhibitions')
@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <hr>
                        <div class="row col-lg-12">
                                <div class="card m-b-30 card-body text-center">
                                    <h4 class="card-title font-16 mt-0">booked exhibitions Report</h4>
                                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a> --}}
                                </div>
                            </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                           <div class="card-body">
                                            @include('partials.success')
        @include('partials.error')
         <!-- <div class="card-body">
                                    <h4 class="mt-0 header-title">Default Datatable</h4>
                                    <p class="text-muted m-b-30">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.</p> -->
                                    @if($exhibitions->isEmpty())
                                    <p class="alert alert-info text-center">No exhibition Bought Yet!</p>
                                    @else
                                    
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Visitor Name</th>
                                                <th>Phone</th>
                                                <th>Exhibition Title</th>
                                                <th>Ticket Id</th>
                                                <th>Exhibition Date</th>{{-- this date must be real exhibition date not created at --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($exhibitions as $exhibition)
                                             <tr>
                                                <th>{{$exhibition->names}}</th>
                                                <th>{{$exhibition->phone}}</th>
                                                <th>{{$exhibition->exhibition_title}}</th>
                                                <th>{{$exhibition->slug}}</th>
                                                <th>{{$exhibition->created_at->toDateString()}}</th>
                                                
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

