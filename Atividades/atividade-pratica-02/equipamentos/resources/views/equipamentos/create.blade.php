@extends('layouts.main')

@section('title', 'Criar Equipamento')

@section('content')

<div id="eq-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastre o equipamento</h1>
  <form action="/equipamentos" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Equipamento:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do equipamento">
    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar Equipamento">
  </form>

  <form action="/" method="POST">
  <h1>Cadastre a manutenção do equipamento</h1>
   
    </form>
</div>

@endsection