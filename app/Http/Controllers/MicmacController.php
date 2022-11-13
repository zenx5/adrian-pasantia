<?php

namespace App\Http\Controllers;

use App\micmac;
use App\Servicio;

use Illuminate\Http\Request;
use Redirect;
class MicmacController extends Controller
{

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
    	return view('micmac.prueba',compact('servicios'));

		}

	public function index( ){
		$proy = micmac::orderBy('proyecto', 'asc')->get();
		$proyx = micmac::orderBy('id', 'asc')->first();
		$x='null';

		 
		return view('micmac.index',compact('proy', 'x'));

	} 

	public function create( $proyecto){


 		$variable = micmacs::where('proyecto', $proyecto)->get();
    	 return view('micmac.create');
	}

	public function store( ){

    	

	}

	 public function show($proyecto)
    {
        $variable = micmac::where('proyecto', $proyecto)->get();
        $var3=0;
        $var2=0;
        $max=0;
        $prueba='hola';
        $numero=1;

        

    return view('micmac.create', compact( 'variable', 'numero', 'var3', 'var2', 'max', 'prueba' ));
    }

	


   
}
