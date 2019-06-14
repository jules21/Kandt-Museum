@extends('layouts.layout')
@section('title','Add new Schedule')
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
                  <form action="{{route('visitschedule.update',$visitSchedule->id )}}" method="post">
                     @csrf
                     <div class="form-group row"><label class="col-sm-2 col-form-label">Day Of Week</label>
                        <div class="col-sm-10">
                               <select class="custom-select" name="day_of_week" id="institution" required>
                                <option value="" selected disabled>pick day</option>
                               
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="thursday">thursday</option>
                                <option value="friday">friday</option>
                                <option value="saturday">saturday</option>
                                <option value="sunday">sunday</option>
                            </select></div>
                    </div>
      

                <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Time (start - End)</label>
                <div class="col-sm-10">                        
                <div class="input-daterange input-group" id="date-range">
                    <input type="time" class="form-control" name="start_time" placeholder="start"> 
                    <input type="time" class="form-control" name="end_time" placeholder="end">
                </div>
                </div>
                </div>
                <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10"><textarea class="form-control" rows="5" name="description">
                        {{$visitSchedule->description}}   
                </textarea></div>
                </div>


            <div class="form-group row m-t-20">
            <div class="col-12 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Add New Schedule') }}</button></div>
        </div>
               </form>
                                 
                                
                             
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
        

@endsection
