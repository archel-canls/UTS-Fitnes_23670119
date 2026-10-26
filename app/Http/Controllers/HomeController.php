<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function courses()
    {
        return view('landing.courses');
    }

    public function blogs()
    {
        return view('landing.blogs');
    }

    public function contact()
    {
        return view('landing.contact');
    }

    // Tambahan method untuk menu Pages
   public function feature()
{
    return view('landing.feature');
}

public function team()
{
    return view('landing.team');
}

public function testimonial()
{
    return view('landing.testimonial');
}
    
}