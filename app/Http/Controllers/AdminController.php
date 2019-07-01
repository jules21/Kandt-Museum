<?php

namespace App\Http\Controllers;

use App\Artifact;
use App\ArtifactCategory;
use App\User;
use App\VisitSchedule;
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

}
