@extends('layouts.app')

@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ route('user.update', $user->id)}}">
@method('PUT')
@csrf
<div class="row">
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Crear Usuario</h4>
    <div class="mb-3">
      <label for="name">Nombre</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" name="name" class="form-control" id="name" placeholder="name
        " value="{{$user->name}}" required="">
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
          <input type="text" name="email" class="form-control" id="email" placeholder="email" value="{{$user->email}}" required="">
          <div class="invalid-feedback" style="width: 100%;">
            Email es requerido.
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="password">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" name="password" class="form-control" id="password" placeholder="password" value="{{$user->password}}" required="">
          <div class="invalid-feedback" style="width: 100%;">
            Password es requerido.
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="input-group">
             <div class="input-group-prepend">
                 <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
             </div>
            
             @php($rols=['1','2']) 
          <select name="rol_id" class="form-control">
             @foreach($rols as $ro)
              <option
                 @if($user->rol_id==$ro)
                 selected
                 @endif 
             > {{$ro}}</option>
             @endforeach
             {{-- <option value="administrador" {{($user->role_id ==='1') ? 'selected' : ''}}> administrador </option>
             <option value="usuario" {{($user->role_id ==='2') ? 'selected' : ''}}> usuario </option> --}}

            </select>
         </div>
     </div>
      
      
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