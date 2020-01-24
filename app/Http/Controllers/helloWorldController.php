<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloworldcontroller extends Controller
{
    function show() {
        return view('welcome');
    }

    function home() {
        return view('home');
    }

    function aboutus() {
        return view('aboutus');
    }

    function contactus() {
        return view('contactus');
    }

}
