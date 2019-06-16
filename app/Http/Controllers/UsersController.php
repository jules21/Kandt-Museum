<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth::check()) {
        $users = User::all();
        return view('users.index', compact('users'));
        // } else {
        //     return redirect('login');
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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

        $user = User::create(
            [
                'firstName' => $request->input('fname'),
                'lastName' => $request->input('lname'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => $request->input('password'),
                'dateOfBirth' => $request->input('dateOfBirth'),
                'gender' => $request->input('gender'),
                'role_id' => $request->input('role'),
            ]);
        if ($user) {
            # code...
            return redirect('admin/users')->with('success', 'new User Added Successfully');
        } else {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::where('id', $user->id)->firstOrFail();

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //        $user = User::WhereId($user->id)->firstOrFail();
        $user = User::where('id', $id)->firstOrFail();
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $updateUser = User::where('id', $id)->update(
            [
                'firstName' => $request->input('fname'),
                'lastName' => $request->input('lname'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'dateOfBirth' => $request->input('dateOfBirth'),
                'gender' => $request->input('gender'),
                'role_id' => $request->input('role'),
            ]);
        if ($updateUser) {
//        if ($updateUser->save()) {
            # code...
            return redirect('admin/users')->with('success', 'User Updated Successfully');
        } else {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser = User::where('id', $user->id)->delete();

        if ($deleteUser) {
            # code...
            return redirect('admin/users')->with('success', 'User deleted Successfully');
        } else {
            return redirect()->back()->withInput();
        }

    }
}
