<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('home');
    }

    public function about(){
    	return view('about');
    }

    public function contact(){
    	return view('contact');
    }

    public function services(){
    	return view('usluge');
    }

    public function products(){
    	return view('proizvodi');
    }
}


