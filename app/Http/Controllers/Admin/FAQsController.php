<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQs;

class FAQsController extends Controller
{
    public function index()
    {
        $faqs = FAQs::all();
        return view('dashboard.admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('dashboard.admin.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|boolean',
        ]);

        FAQs::create($request->all());

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    public function edit($id)
    {
        $faq = FAQs::findOrFail($id);
        return view('dashboard.admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $faq = FAQs::findOrFail($id);
        $faq->update($request->all());

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy($id)
    {
        $faq = FAQs::findOrFail($id);
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
