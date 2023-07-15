<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Contractor;
use App\Models\Portofolio;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Trade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $portofolios = Portofolio::all();
        $teams = Team::all();
        $testimonials = Testimonial::all();
        $clients = Client::all();
        $blogs = Blog::latest()->paginate(3);


        return view('home.index', ['active' => 'home'], compact(
            'sliders',
            'about',
            'portofolios',
            'testimonials',
            'clients',
            'blogs'
        ));
    }
    public function about()
    {
        $about = About::first();
        $teams = Team::all();
        return view('home.about', ['active' => 'about'], compact('about', 'teams'));
    }

    public function contractor()
    {
        $contractors = Contractor::latest()->paginate(9);
        return view('home.contractor.index', ['active' => 'contractor'], compact('contractors'));
    }

    public function detail_contractor(Contractor $contractor)
    {
        return view('home.contractor.detail', ['active' => 'contractor'], compact('contractor'));
    }


    public function trade()
    {
        $trades = Trade::latest()->paginate(9);
        return view('home.trade.index', ['active' => 'trade'], compact('trades'));
    }

    public function detail_trade(Trade $trade)
    {
        return view('home.trade.detail', ['active' => 'trade'], compact('trade'));
    }


    public function portfolio()
    {
        $portofolios = Portofolio::all();
        return view('home.portofolio.index', ['active' => 'portfolio'], compact('portofolios'));
    }
    public function detail_portfolio(Portofolio $portofolio)
    {
        return view('home.portofolio.detail', ['active' => 'portfolio'], compact('portofolio'));
    }

    public function blog()
    {
        $blogs = Blog::with('author:id,name')->latest()->paginate(3);
        // dd($blogs);
        // $blogs = Blog::latest()->paginate(5);
        $latest_blog = Blog::latest()->paginate(3);
        return view('home.blog.index', ['active' => 'blog'], compact('blogs', 'latest_blog'));
    }
    public function detail_blog(Blog $blog)
    {
        $latest_blog = Blog::latest()->paginate(3);
        return view('home.blog.detail', ['active' => 'blog'], compact('blog', 'latest_blog'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('home.contact', ['active' => 'contact'], compact('contact'));
    }
}
