<?php

namespace App\Http\Controllers;

use App\Artifact;
use App\Mail\BuyMail;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe($id)
    {
        $product = Artifact::find($id);
        $user = Auth::user();
        return view('stripe', compact('product', 'user'));
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
            "email" => $request->email,
            "source" => $request->stripeToken,
        ));

        // Charge Customer
        $charge = Stripe\Charge::create([
            "amount" => $request->amount,
            "currency" => "usd",
            "customer" => $customer->id,
            "description" => "pay Artifact kandt Museum",
        ]);
        // dd($request->all());
        // Transaction Data
        $transactionData = [
            'id' => $charge->id,
            'customer_id' => $charge->customer,
            // 'user_id' => Auth::user()->id,
            'names' => $request->firstname . " " . $request->lastname,
            'email' => $request->email,
            'product' => $request->product_name,
            'amount' => $charge->amount,
            'currency' => $charge->currency,
            'status' => $charge->status,
            'details' => $charge->description,
        ];
        Transaction::create($transactionData);
        // dd($transactionData);

        $messages = [
            "email" => $request->email,
            "product_name" => $request->product_name,
            "product_description" => $request->product_description,
            "product_amount" => $request->amount,
        ];

        Mail::to($request->input('email'))->send(new BuyMail($messages));

        Alert::success('THANKS FOR SHOPPING WITH US', 'please check your email for more...')->persistent('Close');
        return Redirect::to('artifacts');
    }
}
