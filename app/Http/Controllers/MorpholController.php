<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
class MorpholController extends Controller
{

	public function home()
	    {
	    	 if (getenv('HTTP_CLIENT_IP')) {
              $ip = getenv('HTTP_CLIENT_IP');
            } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
              $ip = getenv('HTTP_X_FORWARDED_FOR');
            } elseif (getenv('HTTP_X_FORWARDED')) {
              $ip = getenv('HTTP_X_FORWARDED');
            } elseif (getenv('HTTP_FORWARDED_FOR')) {
              $ip = getenv('HTTP_FORWARDED_FOR');
            } elseif (getenv('HTTP_FORWARDED')) {
              $ip = getenv('HTTP_FORWARDED');
            } else {
              
              $ip = $_SERVER['REMOTE_ADDR'];
            }

            $servicios = Servicio::all();
    	return view('morphol.home',compact('servicios'));

		}

	public function index( ){
			 return view('morphol.index');

	}

	public function create( ){

    	 return view('morphol.create');
	}

	public function store( ){

    	
	}


}