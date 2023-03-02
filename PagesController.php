<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }    
    
    public function about() {
        return view('about');
        // return '<h1>'.$i.'</h1>';
    }

    public function contact() {
        return view('contact');
    }

    public function thankyou() {
        return view('thankyou');
    }
}
