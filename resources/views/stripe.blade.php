@extends('layouts.main');
@section('title', 'Buy Artifact')
@section('page', 'Buy Artifact')

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
                <span class="text-center text-capitalize text-info">price {{$product->amount}}.00$</span>
            </div>

   <form action=" {{route('stripe.post')}} " method="post" id="payment-form">
    @csrf
    <input type="hidden" name="amount" value="{{$product->amount}}">
    <input type="hidden" name="product_name" value="{{$product->name}}">
    <input type="hidden" name="product_description" value="{{$product->description}}">

      <div class="form-group">
         <label for="firstname">first name</label>
          <input type="text" name="firstname" class="form-control" value=" {{$user ? $user->firstname: "" }}  ">
      </div>
      <div class="form-group">
         <label for="lastname">last name</label>
          <input type="text" name="lastname" class="form-control" value=" {{$user ? $user->lastname: "" }} ">
      </div>
      <div class="form-group">
         <label for="email">email</label>
          <input type="email" name="email" class="form-control" value=" {{$user ? $user->email: "" }} ">
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
<hr>
<div class="container">
    <div class="row" style="padding-top:25px; padding-bottom:25px;">
        <div class="col-md-12">
            <div id="mainContentWrapper">
                <div class="col-md-8 col-md-offset-2">
                    <h2 style="text-align: center;">
                        Review Your Order &amp; Complete Checkout
                    </h2>
                    <hr>
                    <a href="#" class="btn btn-info" style="width: 100%;">Add More Products &amp; Services</a>
                    <hr>
                    <div class="shopping_cart">
                        <form class="form-horizontal" role="form" action="" method="post" id="payment-form">
                            <div class="accordion" id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Review
                                                Your Order</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class=" collapse in">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <table class="table table-striped">
                                                        <tbody><tr>
                                                            <td colspan="2">
                                                                <a class="btn btn-warning btn-sm" class="close" title="Remove Item">X</a>
                                                                <b>
                                                                    Premium Posting</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <ul>
                                                                    <li>One Job Posting Credit</li>
                                                                    <li>Job Distribution*</li>
                                                                    <li>Social Media Distribution</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>$147.00</b>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Order Total</h3>
                                                        <h3><span style="color:green;">$147.00</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <div style="text-align: center; width:100%;"><a style="width:100%;" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class=" btn btn-success" onclick="$(this).fadeOut(); $('#payInfo').fadeIn();">Continue
                                            to Billing Information»</a></div>
                                    </h4>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Contact
                                            and Billing Information</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="card-block">
                                        <b>Help us keep your account safe and secure, please verify your billing
                                            information.</b>
                                        <br><br>
                                        <table class="table table-striped" style="font-weight: bold;">
                                            <tbody><tr>
                                                <td style="width: 175px;">
                                                    <label for="id_email">Best Email:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_email" name="email" required="required" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_first_name">First name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_first_name" name="first_name" required="required" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_last_name">Last name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_last_name" name="last_name" required="required" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_address_line_1">Address:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_address_line_1" name="address_line_1" required="required" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_address_line_2">Unit / Suite #:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_address_line_2" name="address_line_2" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_city">City:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_city" name="city" required="required" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_state">State:</label></td>
                                                <td>
                                                    <select class="form-control" id="id_state" name="state">
                                                        <option value="AK">Alaska</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="CA">California</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="DC">Washington D.C.</option>
                                                        <option value="WV">West Virginia</option>
                                                        <option value="WI">Wisconsin</option>
                                                        <option value="WY">Wyoming</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_postalcode">Postalcode:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_postalcode" name="postalcode" required="required" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_phone">Phone:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_phone" name="phone" type="text">
                                                </td>
                                            </tr>

                                        </tbody></table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <div style="text-align: center;"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class=" btn   btn-success" id="payInfo" style="width:100%;display: none;" onclick="$(this).fadeOut();  
                   document.getElementById('collapseThree').scrollIntoView()">Enter Payment Information »</a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <b>Payment Information</b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="card-block">
                                        <span class="payment-errors"></span>
                                        <fieldset>
                                            <legend>What method would you like to pay with today?</legend>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="card-holder-name">Name on
                                                    Card</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" stripe-data="name" id="name-on-card" placeholder="Card Holder's Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="card-number">Card
                                                    Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" stripe-data="number" id="card-number" placeholder="Debit/Credit Card Number">
                                                    <br>
                                                    <div><img class="" src="https://s3.amazonaws.com/hiresnetwork/imgs/cc.png" style="max-width: 250px; padding-bottom: 20px;">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="expiry-month">Expiration
                                                        Date</label>
                                                    <div class="col-sm-9">
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <select class="form-control col-sm-2" data-stripe="exp-month" id="card-exp-month" style="margin-left:5px;">
                                                                    <option>Month</option>
                                                                    <option value="01">Jan (01)</option>
                                                                    <option value="02">Feb (02)</option>
                                                                    <option value="03">Mar (03)</option>
                                                                    <option value="04">Apr (04)</option>
                                                                    <option value="05">May (05)</option>
                                                                    <option value="06">June (06)</option>
                                                                    <option value="07">July (07)</option>
                                                                    <option value="08">Aug (08)</option>
                                                                    <option value="09">Sep (09)</option>
                                                                    <option value="10">Oct (10)</option>
                                                                    <option value="11">Nov (11)</option>
                                                                    <option value="12">Dec (12)</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <select class="form-control" data-stripe="exp-year" id="card-exp-year">
                                                                    <option value="2016">2016</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="cvv">Card CVC</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" stripe-data="cvc" id="card-cvc" placeholder="Security Code">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9">
                                                    </div>
                                                </div>
                                        </div></fieldset>
                                        <button type="submit" class="btn btn-success btn-lg" style="width:100%;">Pay
                                            Now
                                        </button>
                                        <br>
                                        <div style="text-align: left;"><br>
                                            By submiting this order you are agreeing to our <a href="/legal/billing/">universal
                                                billing agreement</a>, and <a href="/legal/terms/">terms of service</a>.
                                            If you have any questions about our products or services please contact us
                                            before placing this order.
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form></div>
                </div>
                
            </div>
        </div>
    </div></div>
 <script src="https://js.stripe.com/v3/"></script>
   <script src="{{asset('js/charge.js')}}"></script>
   @endsection