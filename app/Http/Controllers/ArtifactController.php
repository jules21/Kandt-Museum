<?php

namespace App\Http\Controllers;

use App\Artifact;
use App\ArtifactCategory;
use Illuminate\Http\Request;

class ArtifactController extends Controller
{

    public function index()
    {
        //
        $artifacts = Artifact::all();
        return view('artifact.index', compact('artifacts'));
     
    }


    public function create()
    {
        //
        $categories = ArtifactCategory::all();
        return view('artifact.create', compact('categories'));
    }


    public function store(Request $request)
    {
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $destinationPath = public_path('images/artifacts');
            $allowedfileExtension=['jpeg','jpg','png'];        
            $extension = $photo->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            if ($check) {
                $filename = time() . $photo->getClientOriginalName();
                $photo->move($destinationPath, $filename);
                $newArt = Artifact::create([
                    'name' => $request->get('name'),
                    'description'=> $request->get('description'),
                    'year'=> $request->get('year'),
                    'photo'=>$filename,
                    'category_id'=> $request->get('category_id'),
                  ]);
                  if($newArt)
                    return back()->with('success', 'You have Added new artifact successful');
               }
  else
  {
      return back()->withInput();
  }}
    }

    public function edit(Artifact $artifact)
    {
        //
        $artifact = Artifact::find($artifact->id);
        $categories = ArtifactCategory::all();
        return view('artifact.edit', compact('categories','artifact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artifact  $artifact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artifact $artifact)
    {
        //
        $artifact = Artifact::find($artifact->id);

 

        $artifact->name = $request->get('name');
        $artifact->description = $request->get('description');
        $artifact->year = $request->get('year');
        $artifact->photo = $request->get('photo');
        // $artifact->category_id = $request->get('category_id');
        $artifact->category_id = 1;

        if($artifact->save())
        {
            return redirect()->route('artifact.index')->with('success', 'You have updated artifact named '. $artifact->name);
        }
        else
        {
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artifact  $artifact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artifact $artifact)
    {
        //
        $artifact = Artifact::where('id', $artifact->id)->delete();

        if ($artifact) {
            # code...
            return redirect()->route('artifact.index')->with('success', 'artifact deleted Successfully');
        }else
        {
            return redirect()->back()->withInput();
        }
    }
}
