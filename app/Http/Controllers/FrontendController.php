<?php

namespace App\Http\Controllers;

use App\Models\FAQs;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Blog;
use App\Models\Service;
use App\Models\NewsletterSubscribers;
use App\Models\ServiceCategory;
use App\Models\VehicleName;
use App\Models\ReviewSite;


class FrontendController extends Controller
{
    public function index()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        $reviews = Review::get();
        $site_reviews = ReviewSite::get();
        return view('frontend.index', compact('reviews', 'blogs', 'makes', 'site_reviews'));
    }
    

    public function blogs()
    {
        $blogTitle = Blog::get();
        // dd($blogTitle);
        $blogs = Blog::where('status', 1)->paginate(10);
        $recent_blogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.blogs.index', compact('blogs', 'blogTitle', 'recent_blogs'));
    }

    public function blogDetails($slug)
    {

        $blogs = Blog::where('slug_name', '!=', $slug)->take(5)->get();
        $blog = Blog::where('slug_name', $slug)->first();
        $recent_blogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.blogs.detail', compact('blog', 'blogs', 'recent_blogs'));
    }

    public function blogDetailsNoSlug($slug)
    {
        $blog = Blog::where('slug_name', $slug)->first();
        $recent_blogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();

        if ($blog) {
            $blogs = Blog::where('slug_name', '!=', $slug)->take(3)->get();

            if ($blog->post_name) {
                return view('frontend.blogs.detail', compact('blog', 'blogs', 'recent_blogs'));
            } else {
            }
        } else {
            abort(404);
        }
    }

    public function aboutUs()
    {
        $faqs = FAQs::where('status', 1)->get();
        $blogs = Blog::where('status', 1)->take(3)->get();
        $reviews = Review::get();
        return view('frontend.pages.aboutUs', compact('reviews', 'faqs', 'blogs'));
    }

    public function contactUs()
    {
        return view('frontend.pages.contactUs');
    }

    public function services(Request $request)
    {
        if ($request->has('category')) {
            $category = ServiceCategory::whereSlug($request->category)->first();
            $services = Service::where('category_id', $category->id)->get();
        } else {
            $services = Service::get();
        }

        

        // dd($services);

        return view('frontend.pages.services.index', compact('services'));
    }

    public function serviceDetails(Request $request, $slug)
    {
        $faqs = FAQs::where('status', 1)->get();
        $service = Service::where('slug', $slug)->first();
        $related = Service::where('id', '!=', $service->id)->where('category_id', $service->category_id)->take(5)->get();
        return view('frontend.pages.services.detail', compact('service', 'related', 'faqs'));
    }

    public function autoAuction()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
        return view('frontend.pages.autoAuction', compact('makes'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ], [
            'email.unique' => 'You have already subscribed to our newsletter.',
        ]);

        NewsletterSubscribers::create($request->only('email'));

        return response()->json(['message' => 'Subscription successful']);
    }

    public function orderTracking()
    {
        return view('frontend.pages.orderTracking');
    }

    public function termsAndConditions()
    {
        return view('frontend.pages.termsAndConditions');
    }

    public function privacyPolicy()
    {
        return view('frontend.pages.privacyPolicy');
    }

    public function vehicleTransportDetail()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();

        return view('frontend.pages.vehicleTransportDetail', compact('makes'));
    }

    public function heavyTransportDetail()
    {
       
        return view('frontend.pages.heavy-transport-detail');
    }

    public function freightTransportDetail()
    {
       
        return view('frontend.pages.freighttransport-detail');
    }
    public function hazmatTransport()
    {
        return view('frontend.forms.hazmattransport');
    }

    public function dryVan()
    {
        return view('frontend.forms.dryvan');
    }

    public function reeferTrucking()
    {
        return view('frontend.forms.reefertrucking');
    }
}
