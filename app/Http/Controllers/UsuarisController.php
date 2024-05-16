<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarisController extends Controller
{
    public function store()
    {
        //VALIDAMOS LA PETICION
        $atributos = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //INTENTAMOS AUTENTIFICAR, SI FALLA LANZAMOS UNA EXCEPCION
        if (!auth()->attempt($atributos)) {
            //El mesaje de excepcion aparecera debajo del campo
            /*
            throw ValidationException::withMessages([
                'email' => 'Sus credenciales no han podido ser verificadas'
            ]);*/
        }
        session()->regenerate();

        //Dirigimos con mensaje flash
        return redirect('/index')->with('bravo', 'Bienvenido de nuevo!');
    }

    public function create()
    {
        return view('usuaris.createpost');
    }

    public function guarda()
    {
    }
}
