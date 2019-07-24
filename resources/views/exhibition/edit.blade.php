@extends('layouts.layout')
@section('title','Edit artifact')
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
                        <form action="{{route('exhibitions.update', $exhibition->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                      <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">exhibition Title</label>
                        <div class="col-sm-10"><input class="form-control" type="text" value="{{$exhibition->title}}" id="example-text-input" name="title"></div>
                    </div>
                        <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Date </label>
                        <div class="col-sm-10"><input class="form-control" type="date" value="{{$exhibition->date}}" id="example-text-input" name="year"></div>
                    </div>
                        <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Time </label>
                        <div class="col-sm-10"><input class="form-control" type="time" value="{{$exhibition->time}}" id="example-text-input" name="time"></div>
                    </div>

                     <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <img src="{{ asset('images/exhibitions/'.$exhibition->photo) }}" alt="" width="300" height="250">
                                        <input class="form-control" type="file" id="example-number-input" name="photo">
                                    </div>
                                </div>

                <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10"><textarea required class="form-control" rows="5" name="description">
                    {{$exhibition->description}}
                </textarea></div>
                </div>


            <div class="form-group row m-t-20">
            <div class="col-12 text-right"><button class="btn btn-warning w-md waves-effect waves-light" type="submit">{{ __('edit Exhibition info') }}</button></div>
        </div>
                                 
                      </form>          
                             
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
</div>
        

@endsection
