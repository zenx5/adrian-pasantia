<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perfil;

class PerfilController extends Controller
{
    public function index( ){
		

		 
		return view('perfil.index');

	}

	public function create()
    {
        return view('perfil.create');
    }

    
    public function store()
    {
        //return $request->all();
        $data = request()->validate([
            
            'email'=> ['required','email','unique:users,email'],
            ]
            ,
            [
              
              'email' => 'Porfavor ingresa una direccion de email válida',
              'email.unique' => 'Ya existe un usuario con este correo',
              
            ]);

            $usuario= User::create([
                
                'email' => $data['email'],
                'habilidades' => $data['habilidades'],
                'intereses' => $data['intereses'],
                'aptitudes' => $data['aptitudes'],
                'idiomas' => $data['idiomas'],
                'descripcion' => $data['descripcion'],
                'telefono' => $data['telefono'],
                'ubicacion' => $data['ubicacion'],
                'linkedin' => $data['linkedin'],
                'exp1' => $data['exp1'],
                'exp2' => $data['exp2'],
                'exp3' => $data['exp3'],
                'univ' => $data['univ'],
                'sec'  => $data['sec'],
            ]);

        $message = $servicio ? 'Perfil agregado correctamente !' : 'El perfil no pudo agregarse';
        return redirect()->route('perfil.index')->with('message',$message);
    }
}
