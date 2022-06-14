<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registro;

class RegistroController extends Controller
{
    
    public function index() {

        $registros = Registro::all();
    
        return view('welcome',['registros' => $registros]);

    }

    public function create() {
        return view('registros.create');
    }

    public function store(Request $request) {

        $registros = new Registro;
        $registros->save();

        return redirect('/');

    }
    

}