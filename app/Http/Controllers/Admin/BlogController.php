<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        // $blogs = Blog::all();
        $blogs = Blog::paginate(20);
        return view('dashboard.admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'post_name' => 'required|string|max:255',
            'slug_name' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'post_short_description' => 'nullable|string',
            'post_description' => 'nullable|string|max:50000000',
            'meta_title' => 'nullable|string|max:255',
            'canonical_url' => 'nullable|string|max:255',
            'meta_keyword' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        // $slug = Str::slug($request->post_name);
        // $validatedData['slug_name'] = $this->generateUniqueSlug($slug);

        // Replace spaces with hyphens in slug_name if provided
        if ($request->filled('slug_name')) {
            $slug = Str::slug($request->slug_name, '-'); // Replace spaces with hyphens
            $validatedData['slug_name'] = $this->generateUniqueSlug($slug);
        } else {
            $slug = Str::slug($request->post_name, '-');
            $validatedData['slug_name'] = $this->generateUniqueSlug($slug);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog_images'), $imageName);
            $validatedData['post_image'] = 'blog_images/' . $imageName;
        }

        $validatedData['user_id'] = auth()->id();

        Blog::create($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validatedData = $request->validate([
            'post_name' => 'required|string|max:255',
            'slug_name' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'post_short_description' => 'nullable|string',
            'post_description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'canonical_url' => 'nullable|string|max:255',
            'meta_keyword' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'required',
        ]);

        // $slug = Str::slug($request->post_name);
        // $validatedData['slug_name'] = $this->generateUniqueSlug($slug, $blog->id);

       // Replace spaces with hyphens in slug_name if provided
       if ($request->filled('slug_name')) {
            $slug = Str::slug($request->slug_name, '-'); // Replace spaces with hyphens
            $validatedData['slug_name'] = $this->generateUniqueSlug($slug, $blog->id);
        } else {
            $slug = Str::slug($request->post_name, '-');
            $validatedData['slug_name'] = $this->generateUniqueSlug($slug, $blog->id);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog_images'), $imageName);
            $validatedData['post_image'] = 'blog_images/' . $imageName;
        }

        $blog->update($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }

    private function generateUniqueSlug($slug, $id = null)
    {
        $newSlug = $slug;
        $counter = 1;

        while (Blog::withTrashed()->where('slug_name', $newSlug)->where('id', '!=', $id)->exists()) {
            $newSlug = $slug . $counter;
            $counter++;
        }

        return $newSlug;
    }
}
