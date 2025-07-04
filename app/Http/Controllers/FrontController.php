<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }
    public function properties()
    {
        return view('front.properties');
    }
    public function contact()
    {
        return view('front.contact');
    }
    
    public function services()
    {
        return view('front.services');
    }

    
}
