<?php

namespace App\Http\Controllers;

use App\Artifact;
use App\Exhibition;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return view('home.index', compact('gallery','events'));
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
    public function ticket()
    {
        return view('home.ticket');
    }
    public function workTime()
    {
        return view('home.work');
    }
    public function bookTicket(Request $request)
    {
        // return view('home.ticket');
        if (Auth::check()) {
            $slug = uniqid();
            $ticket = Ticket::create(
                [
                    'names' => $request->input('names'),
                    'phone' => $request->input('phone'),
                    'exhibition_title' => $request->input('exhibition_title'),
                    'exhibition_id' => $request->input('exhibition_id'),
                    'user_id' => $request->input('user_id'),
                    'slug' => $slug,
                ]);

            if ($ticket) {
                return back()->with('success', 'You have booked Ticket successful ');
            } else {
                return back()->withInput();
            }
        } else {
            return \redirect('login')->with('error', 'must have an Account in order to Book a Ticket');
        }
    }
}
