<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowHome()
    {
        return view('Home');
    }
    public function ShowCategorys()
    {
        return view('Categories');
    }
    public function HowItWorks()
    {
        return view('HowItWork');
    }
    public function ShowAbout()
    {
        return view('About');
    }
    public function ShowNewAnnouncement()
    {
        return view('NewAnnonce');
    }
    public function ShowProfile()
    {
        return view('Profile');
    }
}
