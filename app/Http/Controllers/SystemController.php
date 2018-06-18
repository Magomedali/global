<?php
namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\{Request,Response};


class SystemController extends Controller{



	public function __construct()
    {
        
    }



    public function signup(Request $request){


    	return view("system.signup",[]);
    }


}