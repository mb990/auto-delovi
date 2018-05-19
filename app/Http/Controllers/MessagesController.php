<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request, [
    		'Name' => 'required',
    		'Email' => 'required',
    		'Message' => 'required'
    	]);

    	return "Uspešno ste poslali poruku.";
    }
}
