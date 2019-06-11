@extends('layouts.layout')
@section('title', 'edit artifact')
@section('content')
   <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-9">
            <div class="card m-b-20">
                <div class="card-body">
                          @include('partials.success')
                          @include('partials.error')
                <form action="{{route('artifactcategories.update', $artifactcategory->id)}}" method="post">
                     @csrf
                     <input type="hidden" name="_method" value="put">
                      <div class="form-group row">
                       <label for="example-text-input" class="col-sm-2 col-form-label">Category Name </label>
                        <div class="col-sm-10"><input class="form-control" type="text" value="{{$artifactcategory->name}}" id="example-text-input" name="name" required></div>
                    </div>




            <div class="form-group row m-t-20">
            <div class="col-12 text-right"><button class="btn btn-warning w-md waves-effect waves-light" type="submit">{{ __('edit Category') }}</button></div>
        </div>
                                 
             </form>
                             
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
        

@endsection
