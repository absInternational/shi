<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReviewSite;

class ReviewSiteController extends Controller
{
    public function index()
    {
        $site_reviews = ReviewSite::all();
        return view('dashboard.admin.site_reviews.index', compact('site_reviews'));
    }

    public function create()
    {
        return view('dashboard.admin.site_reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|numeric',
            'profile_name' => 'required|string',
            // 'rating_url' => 'required|string',
        ]);

        ReviewSite::create($request->all());

        return redirect()->route('site_review.index')->with('success', 'Site Review created successfully.');
    }

    public function edit($id)
    {
        $site_review = ReviewSite::findOrFail($id);
        return view('dashboard.admin.site_reviews.edit', compact('site_review'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|numeric',
            'profile_name' => 'required|string',
            'rating_url' => 'required|string',
        ]);

        $site_review = ReviewSite::findOrFail($id);
        $site_review->update($request->all());

        return redirect()->route('site_review.index')->with('success', 'Site Review updated successfully.');
    }

    public function destroy($id)
    {
        $site_review = ReviewSite::findOrFail($id);
        $site_review->delete();

        return redirect()->back()->with('success', 'Site Review deleted successfully.');
    }
}
