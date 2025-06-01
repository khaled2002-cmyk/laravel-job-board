<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        return view('index');
    }

    function about()
    {
        return view('About',['pagetitle' => 'About Page']);
    }

    function contact()
    {
        return view('Contact',['pagetitle' => 'Contact Page']);
    }

    function _NotFound404()
    {
        return view('404NotFound',['pagetitle' => '404 Not Found']);
    }

}
