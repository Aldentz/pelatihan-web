<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\destination as ModelsDestination;

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
        Destination::create($request->all());
        return redirect(to:'/destinations')->with(key: 'success', value: 'Destination created successfully.');
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
        $destinations = Destination::find($id);
        if ($destinations) {
            $destinations->update($request->all());
            return redirect('/destinations')->with('success', 'Destination updated successfully.');
        } else {
            return redirect('/destinations')->with( 'error', 'Destination not found.');
        }
    }

   
}
