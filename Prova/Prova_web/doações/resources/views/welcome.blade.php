@extends('layouts.main')
@section('title', 'Bem vindo')
@section('content')



<div id='search-container' class='col-md-12'>
    <h1>HELP</h1>
 <h2>
 <br>Doação de Alimentos e Agasalhos
 </h2>
</div>
<div id="eq-container" class="col-md-12">
    <h2>Doações</h2>
    <p class="subtitle">Veja as doações recebidas por entidade</p>
    <div id="cards-container" class="row">
        @foreach($items as $item)
        <div class="card col-md-3">
     
            <div class="card-body">
                <h5 class="card-title">{{ $item->descricao }}</h5>
                <a href="/doacoes/{{$item->id}}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    
        @endforeach
    </div>
</div>

@endsection