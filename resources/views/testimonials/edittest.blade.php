@extends('layouts.app')

@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ route('testimonials.update', $Testimonials->id)}}">
  @method('PUT')
  @csrf
<div class="row">
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Crear en seccion Testimonios</h4>
    <div class="mb-3">
      <label for="titulo">Titulo</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" name="titulo" class="form-control" id="titulo" value="{{$Testimonials->titulo}}" placeholder="titulo
        " required="">
        <div class="invalid-feedback" style="width: 100%;">
            Titulo es requerido.
        </div>
      </div>
    </div>

      <div class="mb-3">
        <label for="descripcion_titulo">Descripcion Titulo </label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="descripcion_titulo" class="form-control" id="descripcion_titulo" value="{{$Testimonials->descripcion_titulo}}" placeholder="descripcion_titulo" required="">
          <div class="invalid-feedback" style="width: 100%;">
            Descripcion del titulo es requerido.
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="nombre_cli">Nombre cliente </label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="nombre_cli" class="form-control" id="nombre_cli" value="{{$Testimonials->nombre_cli}}" placeholder="nombre_cli" required="">
          <div class="invalid-feedback" style="width: 100%;">
            Nombre cliente es requerido.
          </div>
        </div>
      </div>
      
      <div id="success"></div>
      <input  type="file" id="imagen" name="imagen" required="" value="{{$Testimonials->imagen}}" >
         
      <hr class="mb-4">
      <button type="submit" class="btn btn-success">
          Aceptar
        </button>
        <a class="btn btn-danger" href="{{ URL::previous() }}">
          Cancelar
        </a>      
    
  </div>
</div>
</form>
@endsection