<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }
    public function aboutus()
    {
        return view('pages.aboutus');
    }
    public function info()
    {
        return view('pages.info');
    }
    public function rules()
    {
        return view('pages.rules');
    }
    public function schedule()
    {
        return view('pages.schedule');
    }
    public function guide()
    {
        return view('pages.guide');
    }
    public function tournaments()
    {
        return view('pages.tournaments');
    }
    public function infoscreen()
    {
        return view('pages.infoscreen');
    }
}
