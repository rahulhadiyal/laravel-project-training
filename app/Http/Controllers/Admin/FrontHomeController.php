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
    public function contact()
    {
        return view('front.contact.contact');
    }
}