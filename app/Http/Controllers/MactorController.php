<?php

namespace App\Http\Controllers;
use App\Servicio;
use Illuminate\Http\Request;

class MactorController extends Controller
{

  public function index( ){
       return view('mactor.index');

  }
	
	public function prueba()
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
    	return view('mactor.home',compact('servicios'));

		  }

    

	public function create( ){

    	 return view('mactor.create');
	}

	public function store( ){

    	
	}
}
