@extends('layouts.app')

@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ route('user.show', $user->id)}}">
@method('PUT')
@csrf
<div class="row">
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Crear servicios</h4>
    <div class="mb-3">
      <label for="nombre">Nombre</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre
        " value="{{$user->nombre}}" disabled="true" required>
        <div class="invalid-feedback" style="width: 100%;">
            Nombre es requerido.
        </div>
      </div>
    </div>

      <div class="mb-3">
        <label for="email">Email</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="email" class="form-control" id="email" placeholder="email" value="{{$user->email}}" disabled="true" required>
          <div class="invalid-feedback" style="width: 100%;">
            Email del Titulo es requerido.
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="password">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="password" class="form-control" id="password" placeholder="password" value="{{$user->password}}" disabled="true" required>
          <div class="invalid-feedback" style="width: 100%;">
            Password es requerido.
          </div>
        </div>
      </div>
      {{-- <div class="form-group">
        <div class="input-group">
             <div class="input-group-prepend">
                 <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
             </div>
             @php($roles=['Admin','Usuario'])
             <!-- en esta parte se crea la variable departamentos para despues llamarlo desde la tabla  y si es el mismo de latabla se selecciona-->
              <select name="rol" class="form-control">
                 <option class="hidden"  disabled>Rol</option>
                 @foreach($role as $roleItem)
                  <option
                     @if($role->name==$roleItem)
                     selected
                     @endif
                 > {{$roleItem}}</option>
                 @endforeach
             </select>
             </div>
         </div> --}}
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