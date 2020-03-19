@extends('layouts.app')

@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ route('blog.store')}}">
@csrf
<div class="row">
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Crear en seccion Blog</h4>
    <div class="mb-3">
      <label for="descripcion">Nombre</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre
        " required="">
        <div class="invalid-feedback" style="width: 100%;">
            Nombre es requerido.
        </div>
      </div>
    </div>

      <div class="mb-3">
        <label for="descripcion">Cargo </label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="cargo" class="form-control" id="cargo" placeholder="cargo" required="">
          <div class="invalid-feedback" style="width: 100%;">
            Cargo es requerido.
          </div>
        </div>
      </div>
      <div id="success"></div>
      <input  type="file" id="imagen" name="imagen" required=""  >
         
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