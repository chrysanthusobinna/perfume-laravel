<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Display the privacy policy page
     */
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    /**
     * Display the terms and conditions page
     */
    public function termsConditions()
    {
        return view('terms-conditions');
    }
} 