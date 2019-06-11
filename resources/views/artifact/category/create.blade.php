@extends('layouts.layout')
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
                  <form action="{{route('artifactcategories.store')}}" method="post">
                     @csrf
                      <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">artifact Category </label>
                        <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{old('name')}}" id="example-text-input" name="name"></div>
                    </div>
      
  


                <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10"><textarea class="form-control" rows="5" name="description"></textarea></div>
                </div>


            <div class="form-group row m-t-20">
            <div class="col-12 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Add New Category') }}</button></div>
        </div>
               </form>
                                 
                                
                             
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
        

@endsection
