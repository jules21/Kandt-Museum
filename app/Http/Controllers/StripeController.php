<?php
 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
 
class StripeController extends Controller
{
 
 
/**
 * Redirect the user to the Payment Gateway.
 *
 * @return Response
 */
public function stripe()
{
    return view('stripe');
}
 
 
/**
 * Redirect the user to the Payment Gateway.
 *
 * @return Response
 */
public function payStripe(Request $request)
{
    $this->validate($request, [
        'card_no' => 'required',
        'expiry_month' => 'required',
        'expiry_year' => 'required',
        'cvv' => 'required',
    ]);
 
$stripe = Stripe::make('sk_test_K0ThsZWtj2g1AorbBQDcV2h5');
try {
    $token = $stripe->tokens()->create([
        'card' => [
            'number'    => $request->get('card_no'),
            'exp_month' => $request->get('expiry_month'),
            'exp_year'  => $request->get('expiry_year'),
            'cvc'       => $request->get('cvv'),
        ],
    ]);
    if (!isset($token['id'])) {
        return Redirect::to('strips')->with('Token is not generate correct');
    }
    $charge = $stripe->charges()->create([
        'card' => $token['id'],
        'currency' => 'USD',
        'amount'   => 20,
        'description' => 'Register Event',
    ]);
    $charge = Charge::create(array(
        'amount' => 20,
        "source" => $token,
        'currency' => 'usd'
    ));
 
     return 'Payment Success';
    } catch (\Exception $ex) {
        return $ex->getMessage();
    }
        
  }  
}