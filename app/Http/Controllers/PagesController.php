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
    public function tietoameista()
    {
        return view('pages.tietoameista');
    }
    public function info()
    {
        return view('pages.info');
    }
    public function saannot()
    {
        return view('pages.saannot');
    }
    public function aikataulu()
    {
        return view('pages.aikataulu');
    }
    public function opas()
    {
        return view('pages.opas');
    }
    public function turnaukset()
    {
        return view('pages.turnaukset');
    }
    public function infoscreen()
    {
        return view('pages.infoscreen');
    }
}
