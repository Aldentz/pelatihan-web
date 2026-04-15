<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

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
        return view(view:'pages.Attractions.createAttraction');
    }
    public function store(Request $request)
    {
        Attraction::create($request->all());
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
        $attractions = Attraction::find($id);
        return view('pages.Attractions.editAttraction', compact('attractions'));
    }
    public function update(Request $request, $id)
    {
        $attractions = Attraction::find($id);
        if ($attractions) {
            $attractions->update($request->all());
            return redirect('/attractions')->with('success', 'Attraction updated successfully.');
        } else {
            return redirect('/attractions')->with( 'error', 'Attraction not found.');
        }
    }

   
}

