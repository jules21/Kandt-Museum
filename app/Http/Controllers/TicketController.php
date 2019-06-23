<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = ticket::all();
        return view('ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = uniqid();
        // $validatedData = $request->validate([
        //     'day_of_week' => 'required',
        //     'start_time' => 'required',
        //     'end_time' => 'required',
        // ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('ticket.edit', ['ticket' => $ticket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $slug = uniqid();
        $ticket = ticket::find($ticket->id);

        $ticket->names = $request->get('names');
        $ticket->phone = $request->get('phone');
        $ticket->exhibition_title = $request->get('exhibition_title');
        $ticket->exhibition_id = $request->get('exhibition_id');
        $ticket->user_id = $request->get('user_id');
        $ticket->slug = $slug;

        if ($ticket->save()) {
            return redirect()->route('ticket.index')->with('success', 'You have updated ticket named ' . $ticket->name);
        } else {
            return back()->withInput();
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
        $ticket = Ticket::findOrFail($id)->delete();

        if ($ticket) {
            return redirect()->route('ticket.index')->with('success', 'Ticket deleted Successfully');
        } else {
            return redirect()->back()->withInput();
        }
    }
}
