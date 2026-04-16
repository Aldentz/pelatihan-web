<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\destination;

class AttractionController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword != '') {
            $attractions = Attraction::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        } else {
            $attractions = Attraction::orderBy('id')->paginate(5);
        }
        return view(view:'pages.Attractions.indexattraction', data: compact('attractions'));
    }

        public function show($id)
    {
        $attractions = Attraction::find($id);
        return view('pages.Attractions.destinasi1', compact('attractions'));
    }

    public function create()
    {
        $destinations = destination::all();
        return view('pages.Attractions.createAttraction',compact('destinations'));
    }
    public function store(Request $request)
    {
        $validated =$request->validate( rules:[
            'destination_id'=> 'required|exists:destination,id',
            'name' => 'required',
            'description' => 'nullable',
        ]);
        \App\Models\Attraction::create($validated);
        return redirect(to:'/attractions')->with(key: 'success', value: 'Attraction created successfully.');
    }

    public function delete($id)
    {
        $attractions = Attraction::find($id);
        if ($attractions) {
            $attractions->delete();
            return redirect(to:'/attractions')->with(key: 'success', value: 'Attraction deleted successfully.');
        } else {
            return redirect(to:'/attractions')->with(key: 'error', value: 'Attraction not found.');

        }
    }

    public function edit($id)
    {
        $destinations = destination::all();
        $attractions = Attraction::find($id);
        return view('pages.Attractions.editAttraction', compact('attractions','destinations'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
           [
            'destination_id'=> 'required|exists:destination,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
 
        $attractions = \App\Models\Attraction::find($id);
        if ($attractions) {
            $attractions->update($request->all());
            return redirect('/attractions')->with('success', 'Attraction updated successfully.');
        } else {
            return redirect('/attractions')->with( 'error', 'Attraction not found.');
        }
    }

   
}

