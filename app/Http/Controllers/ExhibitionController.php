<?php

namespace App\Http\Controllers;

use App\Exhibition;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $exhibitions = Exhibition::all();
        return view('exhibition.index', compact('exhibitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exhibition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $destinationPath = public_path('images/exhibitions');
            $allowedfileExtension = ['jpeg', 'jpg', 'png'];
            $extension = $photo->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
            if ($check) {
                $filename = time() . $photo->getClientOriginalName();
                $photo->move($destinationPath, $filename);
                $newArt = Exhibition::create([
                    'title' => $request->get('title'),
                    'description' => $request->get('description'),
                    'date' => $request->get('date'),
                    'time' => $request->get('time'),
                    'photo' => $filename,
                ]);

                if ($newArt) {return redirect()->route('exhibitions.index')->with('success', 'You have Added exhibition ');} else {
                    return back()->withInput();
                }
            } else {
                return redirect()->back()->with('error', 'unsupported image ');
            }
        } else {
            return redirect()->back()->with('error', 'please upload image ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exhibition  $exhibition
     * @return \Illuminate\Http\Response
     */
    public function show(Exhibition $exhibition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exhibition  $exhibition
     * @return \Illuminate\Http\Response
     */
    public function edit(Exhibition $exhibition)
    {
        $exhibition = Exhibition::find($exhibition->id);
        return view('exhibition.edit', compact('exhibition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exhibition  $exhibition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exhibition $exhibition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exhibition  $exhibition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exhibition $exhibition)
    {
        $exhibition = Exhibition::where('id', $exhibition->id)->first();

        $image = $exhibition->photo;

        if ($exhibition->delete()) {
            # code...
            @unlink(public_path('/images/exhibitions/' . $image));
            return redirect()->route('exhibition.index')->with('success', 'exhibition deleted Successfully');
        } else {
            return redirect()->back()->withInput();
        }
    }
}
