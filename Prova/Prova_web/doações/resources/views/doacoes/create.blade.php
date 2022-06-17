@extends('layouts.main')
@section('title', 'Criar doação')
@section('content')
<div id="eq-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastre sua doação</h1>
  <form action="/doacoes" method="POST" >
    @csrf
   
    <div class="form-group">
      <label for="title">Descrição</label>
      <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar doacao">
  </form>
</div>

@endsection