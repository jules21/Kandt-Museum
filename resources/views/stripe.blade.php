@extends('layouts.main');
@section('title', 'About Us')
@section('page', 'About Us')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-2 mt-4">
            <div class="card card-body">
                    <div class="row display-tr">
                            <h3 >Payment Details</h3>
                            <div>                            
                                <img src="http://i76.imgup.net/accepted_c22e0.png">
                            </div>
                        </div>
                <span class="text-center text-capitalize text-info">price 25$</span>
            </div>

   <form action=" {{route('stripe.post')}} " method="post" id="payment-form">
    @csrf
    <input type="hidden" name="amount" value="2500">
      <div class="form-group">
         <label for="firstname">first name</label>
          <input type="text" name="firstname" class="form-control">
      </div>
      <div class="form-group">
         <label for="lastname">last name</label>
          <input type="text" name="lastname" class="form-control">
      </div>
      <div class="form-group">
         <label for="email">email</label>
          <input type="email" name="email" class="form-control">
      </div>

       <div class="form-group">
           <label for="card-element">
               Credit or debit card
           </label>
           <div id="card-element">
<!--               stripe Element will be inserted here-->
           </div>
<!--           used to display Element Errors-->
           <div id="card-errors" role="alert"></div>
       </div>
       <button>Submit Payment</button>
   </form>


        </div>
    </div>
</div>
 <script src="https://js.stripe.com/v3/"></script>
   <script src="{{asset('js/charge.js')}}"></script>
   @endsection