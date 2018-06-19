<?php
namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\{Request,Response};


class SystemController extends Controller{



	public function __construct()
    {
        
    }

    
    public  function login(Request $request){

    	return view("system.login",[]);
    }

    

    public function register(Request $request){

    	return view("system.register",[]);
    }



    public function start(){

    	return view("system.start",[]);
    }
}