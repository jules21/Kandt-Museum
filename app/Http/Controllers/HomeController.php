<?php

namespace App\Http\Controllers;

use App\Artifact;
use App\ContactUS;
use App\Exhibition;
use App\Mail\BookingMail;
use App\Mail\ContactMail;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\VisitSchedule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Exhibition::all();
        $gallery = DB::table('artifacts')->inRandomOrder()->take(8)->get();

        return view('home.index', compact('gallery', 'events'));
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function gallery()
    {
        $gallery = Artifact::all();
        return view('home.gallery', compact('gallery'));
    }
    public function login()
    {
        return view('home.login');
    }
    public function register()
    {
        return view('home.register');
    }
    public function event()
    {
        $artifacts = DB::table('artifacts')
            ->latest()->limit(5)
            ->get();
        $events = Exhibition::all();
        return view('home.event', compact('artifacts', 'events'));
    }
    public function showEvent($id)
    {
        $artifacts = DB::table('artifacts')
            ->latest()->limit(5)
            ->get();
        $event = Exhibition::find($id);
        $products = DB::table('artifacts')->where('affordable', '=', 1)->get();
        return view('home.single-event', compact('artifacts', 'event', 'products'));

    }
    public function showArt($id)
    {
        $artifacts = DB::table('artifacts')
            ->latest()->limit(5)
            ->get();
        $art = Artifact::find($id);
        $events = Exhibition::all();
        return view('home.single-artifact', compact('artifacts', 'art', 'events'));

    }
    public function ticket()
    {
        return view('home.ticket');
    }
    public function workTime()
    {
        $works = VisitSchedule::all();
        return view('home.work', compact('works'));
    }
    public function bookNow($request)
    {
        $slug = uniqid();
        $ticket = Ticket::create(
            [
                'names' => $request->input('names'),
                'phone' => $request->input('phone'),
                'exhibition_title' => $request->input('exhibition_title'),
                'exhibition_id' => $request->input('exhibition_id'),
                'user_id' => Auth::user()->id,
                'slug' => $slug,
            ]);

        $messages = [
            'names' => $request->get('names'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'exhibition_title' => $request->get('exhibition_title'),
            'exhibition_description' => $request->get('exhibition_description'),
            'slug' => $slug,
        ];

        Mail::to($request->input('email'))->send(new BookingMail($messages));

        return redirect()->back()->with('success', 'Booking done successfully!');

        // if ($ticket) {
        //     return redirect('event')->with('success', 'You have booked Ticket successful ');
        // } else {
        //     return back()->withInput();
        // }
    }
    public function bookTicket(Request $request)
    {
        $events = DB::table('tickets')->where('exhibition_id', '=', $request->exhibition_id)->get();

        if (!$events->isEmpty()) {
            foreach ($events as $event) {
                if ($event->user_id == Auth::user()->id) {
                    return \redirect()->back()->with('error', 'already booked');
                } else {
                    $this->bookNow($request);
                    return \redirect()->back()->with('success', 'booked successful');
                }
            }
        } else {
            $this->validate($request, [
                "names" => "required",
                "phone" => "required",
                "email" => "required",
            ]);

            $slug = uniqid();
            Ticket::create(
                [
                    'names' => $request->input('names'),
                    'phone' => $request->input('phone'),
                    'exhibition_title' => $request->input('exhibition_title'),
                    'exhibition_id' => $request->input('exhibition_id'),
                    'user_id' => Auth::user()->id,
                    'slug' => $slug,
                ]);
            return \redirect()->back()->with('success', 'booked successful');
        }
    }
    public function barcode()
    {
        $artifact = Artifact::find(1);
        return view('barcode', compact('artifact'));
    }
    public function buy()
    {
        $artifacts = DB::table('artifacts')
            ->latest()->limit(5)
            ->get();
        $products = DB::table('artifacts')->where('affordable', '=', 1)->get();
        return view('home.affordable', compact('artifacts', 'products'));
    }
    public function artifact()
    {
        $products = DB::table('artifacts')->where('affordable', '=', 1)->get();

        // $products = $productz->filter(function ($product) {

        //     $soldproducts = DB::table('transactions')->get();
        //     foreach ($soldproducts as $soldproduct) {
        //         return $product->id != $soldproduct->product_id;
        //     }
        // });
        // dd($products);
        return view('home.artifacts', compact('products'));
    }
    public function booking($id)
    {
        $event = Exhibition::find($id);
        return view('home.booking', compact('event'));
    }

    public function contactUSPost(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required|email', 'message' => 'required']);
        ContactUS::create($request->all());

        $messages = [
            'name' => $request->get('name'),
            'subject' => $request->get('subject'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ];

        Mail::to('info@kandtmuseum.rw')->send(new ContactMail($messages));

        return redirect()->back()->with('success', 'Thanks for contacting us!');

        // Mail::send('email',
        //     array(
        //         'name' => $request->get('name'),
        //         'email' => $request->get('email'),
        //         'user_message' => $request->get('message'),
        //     ), function ($message) {
        //         $message->from('jules21@gmail.com');
        //         $message->to('julesfabien96@gmail.com', 'Admin')->subject('Kandt Museum Feedback');
        //     });
        // return back()->with('success', 'Thanks for contacting us!');
    }
    
}
