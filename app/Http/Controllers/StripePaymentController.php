<?php
   
namespace App\Http\Controllers;
   
use Stripe;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Transaction;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // Create Customer In Stripe
        $customer = Stripe\Customer::create(array(
            "email" =>  $request->email,
            "source" => $request->stripeToken,
        ));

        // Charge Customer
        $charge = Stripe\Charge::create ([
                "amount" =>  $request->amount,
                "currency" => "usd",
                "customer" => $customer->id,
                "description" => "pay Artifact kandt Museum" 
        ]);

        // dd($charge);

        // Customer Data
// $customerData = [
//     'id' => $charge->customer,
//     'first_name' => $request->firstname,
//     'last_name' => $request->lastname,
//     'email' => $request->email,
// ];

// Transaction Data
$transactionData = [
    'id' => $charge->id,
    'customer_id' => $charge->customer,
    'user_id' =>Auth::user()->id,
    'product' => $charge->description,
    'amount' => $charge->amount,
    'currency' => $charge->currency,
    'status' => $charge->status,
  ];
//   dd($transactionData);

  Transaction::create($transactionData);

        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}