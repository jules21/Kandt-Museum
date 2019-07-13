<?php

namespace App\Http\Controllers;

use App\Exhibition;
use App\Mail\BookingMail;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class TicketsController extends Controller
{
    public function __construct()
    {
        // Middleware only applied to these methods
        $this->middleware('auth', ['only' => [
            'edit', // Could add bunch of more methods too
        ]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artifacts = DB::table('artifacts')
            ->latest()->limit(5)
            ->get();
        $events = Exhibition::all();
        return view('home.event', compact('artifacts', 'events'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artifacts = DB::table('artifacts')
            ->latest()->limit(5)
            ->get();
        $event = Exhibition::find($id);
        $products = DB::table('artifacts')->where('affordable', '=', 1)->get();
        return view('home.single-event', compact('artifacts', 'event', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Exhibition::find($id);
        return view('home.booking', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $events = DB::table('tickets')->where('exhibition_id', '=', $id)->get();

        if (!$events->isEmpty()) {
            foreach ($events as $event) {
                if ($event->user_id == Auth::user()->id) {
                    Alert::info('Already booked to this Event!', 'choose other Events to Book below')->persistent('Close');
                    return \redirect()->route('events.index');
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
            $messages = [
                'names' => $request->get('names'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email'),
                'exhibition_title' => $request->get('exhibition_title'),
                'exhibition_description' => $request->get('exhibition_description'),
                'slug' => $slug,
            ];

            if (Mail::to($request->input('email'))->send(new BookingMail($messages))) {

            }
            Alert::success('booking done successfully', 'please check your email for more...')->persistent('Close');
            return \redirect()->route('events.index');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
