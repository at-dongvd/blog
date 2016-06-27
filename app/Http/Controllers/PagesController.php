<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function getIndex () {
    	// process variable data or params
    	// talk to the model
    	// receive from the model
    	// compile pr process data from the model if needed
    	// pass that data to the correct view
    	return view('pages.welcome');
    }

    public function getAbout () {
    	return view('pages.about');
    }

    public function getContact () {
    	return view('pages.contact');
    }
}
