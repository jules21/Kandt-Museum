<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use App\Artifact;
use App\VisitSchedule;
use App\ArtifactCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function profile()
    {
        $user = Auth::User();
        return view('auth.profile', compact('user'));
    }
    public function editProfile(Request $request, $id)
    {

        $updateUser = User::where('id', $id)->update(
            [
                'firstName' => $request->input('fname'),
                'lastName' => $request->input('lname'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'dateOfBirth' => $request->input('dateOfBirth'),
                'gender' => $request->input('gender'),
                'role_id' => Auth::user()->role_id,
            ]);
        if ($updateUser) {
//        if ($updateUser->save()) {
            # code...
            return redirect('admin/profile')->with('success', 'User Updated Successfully');
        } else {
            return redirect()->back()->withInput();
        }
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
