@extends('layouts.main')
@section('title', $item->descricao)
@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
      <div class="col-md-12" id="description-container">
        <h3>Sobre a doacao:</h3>
        <p class="eq-description">{{ $item->descricao }}</p>
        <h2>Entidade</h2>
        <p class="eq-description">{{ $item->descricao }}</p>
      </div>
    </div>
  </div>
@endsection