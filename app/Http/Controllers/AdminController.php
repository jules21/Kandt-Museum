<?php

namespace App\Http\Controllers;

use App\Artifact;
use App\ArtifactCategory;
use App\User;
use App\VisitSchedule;
use Mail;

class AdminController extends Controller
{
    //
    public function index()
    {
        //
        $users = User::all();
        $artifact = Artifact::all();
        $artifactCategory = ArtifactCategory::all();
        $visitSchedule = VisitSchedule::all();

        return view('dashboard',
            [
                'users' => $users,
                'artifact' => $artifact,
                'artifactCategory' => $artifactCategory,
                'visitSchedule' => $visitSchedule,
            ]);

    }

    public function contactUSPost(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'email' => 'required|email', 'message' => 'required']);
        ContactUS::create($request->all());

        $sender = $request->get('email');
        $receiver = 'julesfabien96@gmail.com';

        Mail::send('email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message'),
            ), function ($message) {
                $message->from($sender);
                $message->to($receiver, 'Admin')->subject('Kandt Museum Feedback');
            });
        return back()->with('success', 'Thanks for contacting us!');
    }
}
