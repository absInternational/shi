<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscribers;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.index');
    }
    public function indexNewsLetter()
    {
        $newsLetter = NewsletterSubscribers::latest()->get();
        return view('dashboard.admin.news_letter.index', compact('newsLetter'));
    }

    // public function showNewsLetter(NewsletterSubscribers $newsLetter)
    // {
    //     return view('dashboard.admin.news_letter.show', compact('newsLetter'));
    // }

    public function destroyNewsLetter(NewsletterSubscribers $newsLetter)
    {
        $newsLetter->delete();

        return redirect()->route('newsLetter.index')
            ->with('success', 'Contact message deleted successfully.');
    }
}
