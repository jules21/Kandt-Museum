<?php

namespace App\Http\Controllers;

use App\Artifact;
use App\ArtifactCategory;
use App\User;
use App\VisitSchedule;

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
}
