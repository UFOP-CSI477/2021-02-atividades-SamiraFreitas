@extends('layouts.main')
@section('title', 'Doar')
@section('content')

<div id="eq-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastre sua doação</h1>
  <form action="/doar" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Descrição</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Descrição">
    </div>
    
    <input type="submit" class="btn btn-primary" value="Cadastrar doacao">
  </form>
</div>
@endsection