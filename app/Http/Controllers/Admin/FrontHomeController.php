<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\FrontController;
use Illuminate\Http\Request;

class FrontHomeController extends FrontController
{
    public function index()
    {
        return view('front.home.home');
    }
    public function about()
    {
        return view('front.about.about');
    }
    public function services()
    {
        return view('front.services.services');
    }
    public function blog()
    {
        return view('front.blog.blog');
    }public function singleBlog()
    {
        return view('front.blog.singleBlog');
    }
    public function shortcodes()
    {
        return view('front.shortcodes.shortcodes');
    }
    public function contact()
    {
        return view('front.contact.contact');
    }
    public function login()
    {
        return view('front.auth.login');
    }
    public function register()
    {
        return view('front.auth.register');
    }
}