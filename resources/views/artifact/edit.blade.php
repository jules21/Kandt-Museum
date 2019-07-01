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
                        <form action="{{route('artifact.update', $artifact->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                      <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">artifact Title</label>
                        <div class="col-sm-10"><input class="form-control" type="text" value="{{$artifact->name}}" id="example-text-input" name="name"></div>
                    </div>
                        <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Author </label>
                        <div class="col-sm-10"><input class="form-control" type="date" value="{{$artifact->year}}" id="example-text-input" name="year"></div>
                    </div>

                     <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <img src="{{ asset('images/artifacts/'.$artifact->photo) }}" alt="" class="img-field" width="300" height="250">
                                        <input class="form-control" type="file" id="example-number-input" name="photo">
                                    </div>
                                </div>

                               <div class="form-group row"><label class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                           <select class="custom-select" name="category_id" id="artifact">
                            @foreach($categories as $category)
                              <option value="{{$category->id}}" @php if($category->id == $artifact->artifact_category_id) echo "selected"; @endphp>{{$category->name}}</option>
                            @endforeach                           
                            
                        </select></div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Sell it? </label>
                    <div class="col-sm-10">
                            <input type="checkbox" id="switch3" switch="bool" {!! $artifact->affordable?"checked":""!!} name="affordable">
                            <label for="switch3" data-on-label="Yes" data-off-label="No"></label>
                    </div>
                </div>

                <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10"><textarea required class="form-control" rows="5" name="description">
                    {{$artifact->description}}
                </textarea></div>
                </div>


            <div class="form-group row m-t-20">
            <div class="col-12 text-right"><button class="btn btn-warning w-md waves-effect waves-light" type="submit">{{ __('edit artifact info') }}</button></div>
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
