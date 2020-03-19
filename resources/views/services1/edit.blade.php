@extends('layouts.app')
@section('content')      
      <form method="POST" enctype="multipart/form-data" action=" {{route('services.update', $Services->id)}}" >
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Editar servicios</h4>
            <div class="mb-3">
              <label for="descripcion">Titulo</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" name="titulo" class="form-control" id="titulo" placeholder="titulo" value="{{$Services->titulo}}"
                required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Titulo es requerido.
                </div>
              </div>
            </div>
        
              <div class="mb-3">
                <label for="descripcion">Descripcion Titulo</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="descripcion" value="{{$Services->descripcion}}"
                  required="">
                  <div class="invalid-feedback" style="width: 100%;">
                    Descripcion del Titulo es requerido.
                  </div>
                </div>
              </div>
        
              <div class="mb-3">
                <label for="titulo_imagen">Titulo de la Imagen</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" name="titulo_imagen" class="form-control" id="titulo_imagen" placeholder="titulo_imagen" value="{{$Services->titulo_imagen}}"
                  required="">
                  <div class="invalid-feedback" style="width: 100%;">
                    Descripcion de la imagen es requerido.
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="descripcion_imagen">Descripcion Imagen</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" name="descripcion_imagen" class="form-control" id="descripcion_imagen" value="{{$Services->descripcion_imagen}}"
                  placeholder="descripcion_imagen" required="">
                  <div class="invalid-feedback" style="width: 100%;">
                    Descripcion de la imagen es requerido.
                  </div>
                </div>
              </div>
              <div id="success">
              <input  type="file" id="imagen" name="imagen" value="{{$Services->imagen}}" required="">
              </div>
              <button type="submit" class="btn btn-success">
                Aceptar
              </button>
              <a class="btn btn-danger" href="{{ URL::previous() }}">
                Cancelar
              </a>       


  
  </form>
@endsection