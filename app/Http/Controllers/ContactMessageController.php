<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index()
    {
        $contactMessages = ContactMessage::latest()->get();
        return view('dashboard.admin.contact_messages.index', compact('contactMessages'));
    }

    // public function create()
    // {
    //     return view('dashboard.admin.contact_messages.create');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'website' => 'nullable|url',
            'subject' => 'required',
            'message' => 'required',
        ]);

        ContactMessage::create($request->all());

        return back()->with('success', 'Contact message created successfully.');
    }

    public function show(ContactMessage $contactMessage)
    {
        return view('dashboard.admin.contact_messages.show', compact('contactMessage'));
    }

    // public function update(Request $request, ContactMessage $contactMessage)
    // {
    //     $request->validate([
    //         'first_name' => 'required',
    //         'last_name' => 'required',
    //         'phone' => 'required',
    //         'email' => 'required|email',
    //         'website' => 'nullable|url',
    //         'subject' => 'required',
    //         'message' => 'required',
    //     ]);

    //     $contactMessage->update($request->all());

    //     return redirect()->route('contact_messages.index')
    //         ->with('success', 'Contact message updated successfully.');
    // }

    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect()->route('contact_messages.index')
            ->with('success', 'Contact message deleted successfully.');
    }
}
