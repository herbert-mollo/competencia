@extends('layouts.app')

@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ route('about.show', $About->id)}}">
    @method('PUT')
    @csrf
<div class="row">
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Editar en esta seccion </h4>
    <div class="mb-3">
      <label for="descripcion">Titulo</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="titulo
        " value="{{$About->titulo}}" disabled="true">
        <div class="invalid-feedback" style="width: 100%;">
          Titulo es requerido.
        </div>
      </div>
    </div>

      <div class="mb-3">
        <label for="descripcion">Descripcion </label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{$About->descripcion}}" placeholder="descripcion" disabled="true">
          <div class="invalid-feedback" style="width: 100%;">
            Titulo es requerido.
          </div>
        </div>
      </div>

      <img src="{{ asset($About->imagen) }}" style="width: 500px"  alt=""> 
         
      <hr class="mb-4">
      
      <a class="redondo btn btn-secondary" href="{{ URL::previous() }}">
        Atras
      </a>      
  </div>
</div>
</form>
@endsection