<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{   public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword != '') {
            $reviews = Review::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        } else {
            $reviews = Review::orderBy('id')->paginate(10);
        }
        return view(view:'pages.Review.indexReview', data: compact('reviews'));
    }

    public function show($id)
    {
        $review = Review::find($id);
        return view('pages.Review.destinasi1', compact('review'));
    }

    public function create()
{
    $attractions = Attraction::all();
    return view('pages.Review.createReview', compact('attractions'));
}
    public function store(Request $request)
    {
        Review::create($request->all());
        return redirect(to:'/reviews')->with(key: 'success', value: 'Review created successfully.');
    }

    public function delete($id)
    {
        $review = Review::find($id);
        if ($review) {
            $review->delete();
            return redirect(to:'/reviews')->with(key: 'success', value: 'Review deleted successfully.');
        } else {
            return redirect(to:'/reviews')->with(key: 'error', value: 'Review not found.');

        }
    }

    public function edit($id)
    {
        $attractions = Attraction::all();
        $review = Review::find($id);
        return view('pages.Review.editReview', compact('review', 'attractions'));
    }
    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        if ($review) {
            $review->update($request->all());
            return redirect('/reviews')->with('success', 'Review updated successfully.');
        } else {
            return redirect('/reviews')->with( 'error', 'Review not found.');
        }
    }
    
}
