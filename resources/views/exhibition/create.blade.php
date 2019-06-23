@extends('layouts.layout')
@section('title','create new Artifact')
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
                        <form action="{{route('exhibitions.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">exhibition Title</label>
                        <div class="col-sm-10"><input class="form-control" type="text" placeholder="Name" id="example-text-input" name="title"></div>
                    </div>
                        <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Date </label>
                        <div class="col-sm-10"><input class="form-control" type="date"  id="example-text-input" name="date"></div>
                    </div>
                        <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Time </label>
                        <div class="col-sm-10">                            
                          <input type="time" class="form-control" name="time" placeholder=""> 
                        </div>
                    </div>

                     <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">exhibition Image</label>
                                    <div class="col-sm-10"><input class="form-control" type="file" placeholder="write book isbn" id="example-file-input" name="photo" required></div>
                                </div>

     

                <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10"><textarea required class="form-control" rows="5" name="description"></textarea></div>
                </div>


            <div class="form-group row m-t-20">
            <div class="col-12 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Add New Exhibition') }}</button></div>
        </div>
                                 
                      </form>          
                             
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
        

@endsection
