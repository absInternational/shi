<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('dashboard.admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('dashboard.admin.reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string',
            'profile_url' => 'nullable|string',
            'rating' => 'required|numeric',
            'number_of_reviews' => 'nullable|integer',
            'review_date' => 'nullable|date',
            'person_name' => 'nullable|string',
            'rating_url' => 'nullable|string',
            'description' => 'nullable|string',
            'type' => 'required|string',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('dashboard.admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'site_name' => 'required|string',
            'profile_url' => 'nullable|string',
            'rating' => 'required|numeric',
            'number_of_reviews' => 'nullable|integer',
            'review_date' => 'nullable|date',
            'person_name' => 'nullable|string',
            'rating_url' => 'nullable|string',
            'description' => 'nullable|string',
            'type' => 'required|string',
        ]);

        $review = Review::findOrFail($id);
        $review->update($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }
}
