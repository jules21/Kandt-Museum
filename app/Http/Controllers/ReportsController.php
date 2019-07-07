<?php

namespace App\Http\Controllers;

// use App\Charts\SampleChart;
use App\Charts\VisitorChart;
use App\Exhibition;
use App\Transaction;

class ReportsController extends Controller
{
    //
    public function chart()
    {
        // ...

        // ...

        $chart = new VisitorChart;
        $chart->labels(['One', 'Two', 'Three', 'Four']);
        $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);

        // return view('sample_view', compact('chart'));
        return view('dashboard', ['chart' => $chart])
        ;
    }
    public function soldArtifacts()
    {
        $artifacts = Transaction::all();
        return view('reports.soldArtifacts', compact('artifacts'));
    }
    public function eventvisitors()
    {
        $exhibitions = Exhibition::all();
        return view('reports.eventvisitor', compact('exhibitions'));
    }
}
