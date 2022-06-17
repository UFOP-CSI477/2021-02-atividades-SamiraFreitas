<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;


class DoacaoController extends Controller
{
    public function index(){

        $items = Item::all();
        return view('welcome', ['items'=> $items]);
    }

    public function create(){
        return view('doacoes.create');
    }

    public function store(Request $request) {

        $item = new Item;
        $item->id = $request->id;
        $item->descricao = $request->descricao;
        $item->save();

        return redirect('/')->with('msg', 'Doação criada com sucesso');

    }

  
    public function show($id) {

        $item = Item::findOrFail($id);

        return view('doacoes.show', ['item' => $item]);
        
    }
}

