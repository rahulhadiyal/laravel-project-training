<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        //View For Front Theme
        view()->share('frontTheme','frontTheme.default');
    }
}
