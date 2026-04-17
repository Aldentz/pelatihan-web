<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\destination as ModelsDestination;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{ public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword != '') {
            $destinations = Destination::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        } else {
            $destinations = Destination::orderBy('id')->paginate(5);
        }
        return view(view:'pages.Destinations.indexDestinasi', data: compact('destinations'));
    }

    public function show($id)
    {
        $destinations = Destination::find($id);
        return view('pages.Destinations.destinasi1', compact('destinations'));
    }

    public function create()
    {
        return view(view:'pages.Destinations.createDestination');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'location' => 'required|string|max:255',
            'ticket_price' => 'required|numeric',
            'working_hours' => 'required|string|max:255',
            'working_days' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048|m1mes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('image', 'public');
            $validated['image'] = basename($imagepath);
        }
        Destination::create($validated);

        return redirect('/destinations')->with('succes', 'Destination created succesfully');

        
    }

    public function delete($id)
    {
        $destinations = Destination::find($id);
        if ($destinations) {
            $destinations->delete();
            return redirect(to:'/destinations')->with(key: 'success', value: 'Destination deleted successfully.');
        } else {
            return redirect(to:'/destinations')->with(key: 'error', value: 'Destination not found.');

        }
    }

    public function edit($id)
    {
        $destinations = Destination::find($id);
        return view('pages.Destinations.editDestination', compact('destinations'));
    }
    public function update(Request $request, $id)
    {
      $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'location' => 'required|string|max:255',
            'ticket_price' => 'required|numeric',
            'working_hours' => 'required|string|max:255',
            'working_days' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048|m1mes:jpg,jpeg,png',
        ]);

        $destination = Destination::find($id);

        if ($destination) {
            if ($destination->image && $request->hasFile('image')){
                Storage::disk( 'public' )->delete('image/' .  $destination->image);
            }

             if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('image', 'public');
            $validated['image'] = basename($imagepath);
        }
        Destination::update($validated);
           return redirect(to:'/destinations')->with(key: 'success', value: 'Destination updated successfully.');
        } else {
            return redirect(to:'/destinations')->with(key: 'error', value: 'Destination not found.');

        } 
        


    }

   
}
