<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Equipamento;

class EquipamentoController extends Controller
{
    
    public function index() {

        $equipamentos = Equipamento::all();
    
        return view('welcome',['equipamentos' => $equipamentos]);

    }

    public function create() {
        return view('equipamentos.create');
    }

    public function store(Request $request) {

        $equipamento = new Equipamento;

        $equipamento->nome = $request->nome;
    
        $equipamento->save();

        return redirect('/');

    }
    

}