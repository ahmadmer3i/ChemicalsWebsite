<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function products()
    {
        return view('frontend.product');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function news()
    {
        return view('frontend.news');
    }

}
