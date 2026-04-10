<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\destination as ModelsDestination;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('pages.indexDestinasi', compact('destinations'));
    }

    public function show($id)
    {
        $destination = Destination::find($id);
        return view('pages.destinasi1', compact('destination'));
    }

    public function create()
    {
        return view(view:'pages.createDestination');
    }
    public function store(Request $request)
    {
        Destination::create($request->all());
        return redirect(to:'/destinations')->with(key: 'success', value: 'Destination created successfully.');
    }

    public function delete($id)
    {
        $destination = Destination::find($id);
        if ($destination) {
            $destination->delete();
            return redirect(to:'/destinations')->with(key: 'success', value: 'Destination deleted successfully.');
        } else {
            return redirect(to:'/destinations')->with(key: 'error', value: 'Destination not found.');

        }
    }

    public function edit($id)
    {
        $destination = Destination::find($id);
        return view('pages.editDestination', compact('destination'));
    }
    public function update(Request $request, $id)
    {
        $destination = Destination::find($id);
        if ($destination) {
            $destination->update($request->all());
            return redirect('/destinations')->with('success', 'Destination updated successfully.');
        } else {
            return redirect('/destinations')->with( 'error', 'Destination not found.');
        }
    }
}
