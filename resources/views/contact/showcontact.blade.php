@extends('layouts.app')

@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ route('contact.show', $Contact->id)}}">
@method('PUT')
@csrf
<div class="row">
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Crear servicios</h4>
    <div class="mb-3">
      <label for="titulo">Titulo</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="titulo
        " value="{{$Contact->titulo}}" required="" disabled="true">
        <div class="invalid-feedback" style="width: 100%;">
          Titulo es requerido.
        </div>
      </div>
    </div>

      <div class="mb-3">
        <label for="descripcion">Descripcion</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="descripcion" disabled="true" value="{{$Contact->descripcion}}" required="">
          <div class="invalid-feedback" style="width: 100%;">
            Descripcion es requerido.
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="direccion">Direccion</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="direccion" class="form-control" id="direccion" placeholder="direccion" disabled="true" value="{{$Contact->direccion}}" required="">
          <div class="invalid-feedback" style="width: 100%;">
            Direccion es requerido.
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="telefono">Telefono</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="telefono" class="form-control" id="telefono" placeholder="telefono" disabled="true" value="{{$Contact->telefono}}" required="">
          <div class="invalid-feedback" style="width: 100%;">
            Email es requerido.
          </div>
        </div>
      <div class="mb-3">
        <label for="email">Email</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="email" class="form-control" id="email" placeholder="email" disabled="true" value="{{$Contact->email}}" required="">
          <div class="invalid-feedback" style="width: 100%;">
            Email es requerido.
          </div>
        </div>
      </div>
      
      <hr class="mb-4">
     <a class="redondo btn btn-secondary" href="{{ URL::previous() }}">
        Atras
      </a>         
    
  </div>
</div>
</form>
@endsection