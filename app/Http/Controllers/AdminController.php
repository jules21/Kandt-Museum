<?php

namespace App\Http\Controllers;

use App\Artifact;
use App\ArtifactCategory;
use App\User;
use App\VisitSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminController extends Controller
{
    //
    public function index()
    {
        $chart_options2 = [
            'chart_title' => 'monthly Visitor',
            'report_type' => 'group_by_date',
            'model' => 'App\Ticket',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart_options = [
            'chart_title' => 'Sold Artifacts monthly',
            'report_type' => 'group_by_date',
            'model' => 'App\Transaction',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);
        $chart2 = new LaravelChart($chart_options2);
        // $chart = new VisitorChart;
        // $chart->labels(['One', 'Two', 'Three', 'Four']);
        // $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
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
                'chart1' => $chart1,
                'chart2' => $chart2,
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
