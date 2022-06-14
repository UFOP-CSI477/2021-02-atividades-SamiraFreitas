@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id='search-container' class='col-md-12'>
 <h1>
 Busque um equipamento
 </h1>
 <form action=" ">
        <input type="text" id='search' name='search' class='form-control' placeholder='procurar'>
</form>
</div>

<div id="eq-container" class="col-md-12">
    <h2>Próximas manutenções </h2>
    <p class="subtitle">Veja as manutenções dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($equipamentos as $equipamento)
        <div class="card col-md-3">
           
            <div class="card-body">
                <h5 class="card-title">{{ $equipamento->nome }}</h5>
            </div>
        </div>
        @endforeach

       
    </div>
</div>

@endsection

