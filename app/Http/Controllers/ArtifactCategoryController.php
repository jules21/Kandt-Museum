<?php

namespace App\Http\Controllers;

use App\ArtifactCategory;
use Illuminate\Http\Request;

class ArtifactCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artifactcategories = ArtifactCategory::all();
        return view('artifact.category.index',['artifactcategories'=>$artifactcategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('artifact.category.create');
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
        $validatedData = $request->validate([
            'name' => 'required',
            ]);
           $artifactCategory =ArtifactCategory::create(
           [
               'name' => $request->input('name'),
               'description' => $request->input('description'),
           ]);
   
           if($artifactCategory)
           {
               return back()->with('success', 'You have created new artifact Category named '. $artifactCategory->name);
           }
           else
           {
               return back()->withInput();
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArtifactCategory  $artifactCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ArtifactCategory $artifactCategory)
    {
        //
        return view('artifact.category.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArtifactCategory  $artifactCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artifact = ArtifactCategory::findOrFail($id);
        // dd($id);
        return view('artifact.category.edit', ['artifactcategory'=>$artifact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArtifactCategory  $artifactCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            ]);
           $artifactCategory =artifactCategory::findOrFail($id)->update(
           [
               'name' => $request->input('name'),
           ]);
   
           if($artifactCategory)
           {
               return redirect()->route('artifactcategories.index')->with('success', 'You have updated Category successful');
           }
           else
           {
               return back()->withInput();
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArtifactCategory  $artifactCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artifactCategory =artifactCategory::findOrFail($id)->delete();

        if ($artifactCategory) {
            # code...
            return redirect()->route('artifactcategories.index')->with('success', 'artifact category deleted Successfully');
        }else
        {
            return redirect()->back()->withInput();
        }
    }
}
