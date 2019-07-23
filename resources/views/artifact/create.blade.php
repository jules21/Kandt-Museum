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
                        <form action="{{route('artifact.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Artifact Name</label>
                        <div class="col-sm-10"><input class="form-control" type="text" placeholder="Artifact Name" id="example-text-input" name="name"></div>
                    </div>
                        <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">Year </label>
                        <div class="col-sm-10"><input class="form-control" type="date"  id="example-text-input" name="year"></div>
                    </div>

                     <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Artifact Image</label>
                                    <div class="col-sm-10"><input class="form-control" type="file" placeholder="write book isbn" id="example-file-input" name="photo" required></div>
                                </div>

                               <div class="form-group row"><label class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                           <select class="custom-select" name="category_id" id="institution" required>
                            <option value="" selected disabled>choose Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach                           
                            
                        </select></div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Sell it? </label>
                    <div class="col-sm-10">
                            <input type="checkbox" id="switch3" switch="bool" checked="checked" name="affordable" class="checked">
                            <label for="switch3" data-on-label="Yes" data-off-label="No"></label>
                    </div>
                </div>
                <div class="form-group row" id="price"><label for="example-text-input" class="col-sm-2 col-form-label">Price </label>
                    <div class="col-sm-10">
                            <div class="input-group mb-3">
                                    <input type="number" min="0" class="form-control" name="price" aria-label="Amount (to the nearest dollar)" required>
                                    <div class="input-group-append">
                                      <span class="input-group-text">RWF</span>
                                    </div>
                                  </div>
                        {{-- <input class="form-control" type="number" min="0" id="example-text-input" name="price"> --}}
                    </div>
                </div>

                <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10"><textarea required class="form-control" rows="5" name="description"></textarea></div>
                </div>


            <div class="form-group row m-t-20">
            <div class="col-12 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Add New Artifact') }}</button></div>
        </div>
                                 
                      </form>          
                             
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
        

<script>
checkbox = document.getElementById('switch3');
checkbox.addEventListener('click', ()=>{
    if(!checkbox.checked){
        // console.log('checked');
        document.getElementById('price').style.display = 'none';
    }else{
        document.getElementById('price').style.display = '';
    }
    
})
</script>
@endsection