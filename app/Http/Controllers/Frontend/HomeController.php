<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function instructor()
    {
        return view('frontend.instructor');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function course()
    {
        return view('frontend.course');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function course_details()
    {
        return view('frontend.course_details');
    }
    public function about()
    {
        return view('frontend.about');
    }
    // public function blog_single($id)
    public function blog_single()
    {
        return view('frontend.blog_single');
    }
    // public function ins_details($id)
    public function ins_details()
    {
        return view('frontend.ins_details');
    }
    public function pricing()
    {
        return view('frontend.pricing');
    }
    public function thankYou()
    {
        return view('frontend.thank-you');
    }
    public function error404()
    {
        return view('frontend.404');
    }
}
