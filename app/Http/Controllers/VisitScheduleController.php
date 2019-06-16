<?php

namespace App\Http\Controllers;

use App\VisitSchedule;
use Illuminate\Http\Request;

class VisitScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visitSchedules = VisitSchedule::all();
        return view('visitSchedule.index',['visitSchedules'=>$visitSchedules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('visitSchedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request->all());
        $validatedData = $request->validate([
            'day_of_week' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            ]);
           $visitSchedule =VisitSchedule::create(
           [
               'days_of_week' => $request->input('day_of_week'),
               'start_time' => $request->input('start_time'),
               'end_time' => $request->input('end_time'),
               'description' => $request->input('description'),
           ]);
   
           if($visitSchedule)
           {
               return back()->with('success', 'You have created new visit Schedule successful ');
           }
           else
           {
               return back()->withInput();
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VisitSchedule  $visitSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(VisitSchedule $visitSchedule)
    {
        // //
        // $artifact = ArtifactCategory::findOrFail($id);
        // // dd($id);
        // return view('artifact.category.edit', ['artifactcategory'=>$artifact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VisitSchedule  $visitSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $visit = VisitSchedule::findOrFail($id);
        // dd($id);
        return view('visitSchedule.edit', ['visitSchedule'=>$visit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VisitSchedule  $visitSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->all();

        //
        // $validatedData = $request->validate([
        //     'day_of_week' => 'required',
        //     'start_time' => 'required',
        //     'end_time' => 'required',
        //     ]);
        //    $visitSchedule =VisitSchedule::findOrFail($id)->update(
        //    [
        //        'days_of_week' => $request->input('day_of_week'),
        //        'start_time' => $request->input('start_time'),
        //        'end_time' => $request->input('end_time'),
        //        'description' => $request->input('description'),
        //    ]);
   
        //    if($visitSchedule)
        //    {
        //        return redirect()->route('visitschedule.index')->with('success', 'You have updated visit schedule successful');
        //    }
        //    else
        //    {
        //        return back()->withInput();
        //    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VisitSchedule  $visitSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $visitSchedule =visitSchedule::findOrFail($id)->delete();

        if ($visitSchedule) {
            # code...
            return redirect()->route('visitschedule.index')->with('success', 'visit Schedule deleted Successfully');
        }else
        {
            return redirect()->back()->withInput();
        }
    }
}
