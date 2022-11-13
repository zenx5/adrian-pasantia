<?php

namespace App\Http\Controllers;
use App\Servicio;
use Illuminate\Http\Request;

class SmicController extends Controller
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
    	return view('smic.home',compact('servicios'));

		}

	public function index( ){
			 return view('smic.index');

	}

	public function create( ){

    	 return view('smic.create');
	}

	public function store( ){

    	
	}


}