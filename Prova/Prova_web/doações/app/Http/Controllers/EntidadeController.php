<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Entidade;


class EntidadeController extends Controller
{
    public function doacoes(){

        $entidades = Entidade::all();
        return view('welcome', ['entidades'=> $entidades]);
    }

    public function create(){
        return view('welcome.create');
    }
}
