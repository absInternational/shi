<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::all();
        return view('dashboard.admin.service_categories.index', compact('serviceCategories'));
    }

    public function create()
    {
        return view('dashboard.admin.service_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $slug = Str::slug($request->name);
        $request->merge(['slug' => $this->generateUniqueSlug($slug)]);

        ServiceCategory::create($request->all());

        return redirect()->route('service_categories.index')->with('success', 'Service category created successfully.');
    }

    public function edit(ServiceCategory $serviceCategory)
    {
        return view('dashboard.admin.service_categories.edit', compact('serviceCategory'));
    }

    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $slug = Str::slug($request->name);
        $request->merge(['slug' => $this->generateUniqueSlug($slug, $serviceCategory->id)]);

        $serviceCategory->update($request->all());

        return redirect()->route('service_categories.index')->with('success', 'Service category updated successfully.');
    }

    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();

        return redirect()->route('service_categories.index')->with('success', 'Service category deleted successfully.');
    }

    private function generateUniqueSlug($slug, $id = null)
    {
        $newSlug = $slug;
        $counter = 1;

        while (ServiceCategory::withTrashed()->where('slug', $newSlug)->where('id', '!=', $id)->exists()) {
            $newSlug = $slug . $counter;
            $counter++;
        }

        return $newSlug;
    }

}
