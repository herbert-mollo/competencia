  @extends('layouts.app')

  @section('content')

  <form method="POST" enctype="multipart/form-data" action="{{ route('galleri.show', $Galleri->id)}}">
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
          " disabled="true" value="{{$Galleri->titulo}}" required="">
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
            <input type="text" name="descripcion" class="form-control" id="descripcion" disabled="true" value="{{$Galleri->descripcion}}" placeholder="descripcion" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Titulo es requerido.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="Nombre_imagen">Nombre Imagen </label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" name="Nombre_imagen" class="form-control" id="Nombre_imagen" disabled="true" value="{{$Galleri->Nombre_imagen}}" placeholder="Nombre_imagen" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Titulo es requerido.
            </div>
          </div>
        </div>
        <div>      
          <img src="{{ asset($Galleri->imagen) }}" style="width: 50%"  alt=""> 
        </div>

          
        <hr class="mb-4">
        
        <a class="redondo btn btn-secondary" href="{{ URL::previous() }}">
        Atras
      </a>         
      
    </div>
  </div>
  </form>
  @endsection