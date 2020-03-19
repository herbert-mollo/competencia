@extends('layouts.app')

@section('content')

<nav class="navbar navbar-light float-right">
  <form class="form-inline">
    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>

  </form>
  {{-- <button href="{{route('user.index')}}" class="btn btn-outline-success my-2 my-sm-0" type="submit">Atras</button> --}}

</nav>    

<a class="btn btn-primary" href="{{route('user.create')}}" role="button">Crear</a>
<a href="{{route('user.index')}}" class="btn btn-primary my-2 my-sm-0" type="submit">Atras</a>
<div class="table-responsive">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Rol</th>
      <th scope="col">Accion</th>

    </tr>
  </thead>
  <tbody>
     
     @foreach($user as $userItem )
      <!--Este foreach es para recorrer los datos de la tabla services con la nueva variable Agendaitem-->
      
      <tr>
      
        <td>{{ $userItem->id }}</td>
        <td>{{ $userItem->name }}</td>
        <td>{{ $userItem->email }}</td>
        <td>{{ $userItem->rol_id}}</td>

     <td>
        <div class="btn-group btn-group-justified" role="group">
          
            <a href="{{ route('user.edit',$userItem->id)}}" class="btn btn-success btn-sm ">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{ route('user.show',$userItem->id)}}" class="btn btn-success btn-sm ">
              <i class="fas fa-eye"></i> 
            </a>
            <form method="POST" action="{{ route ('user.destroy',$userItem->id)}}" >
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              
              <button type="submit" class="btn btn-danger btn-sm " title="Eliminar" >
                <i class="fa fa-trash" ></i> </button>  
          
       
        </div>
        </td>
       {{-- <td> <a href="{{ route('user.edit',$userItem->id)}}" class="btn btn-success btn-sm ">
          <i class="fa fa-edit"></i> Editar 
        </a></td>
        <td> <a href="{{ route('user.show',$userItem->id)}}" class="btn btn-success btn-sm ">
          <i class="fa fa-edit"></i> Ver 
        </a></td>

        <td> <form method="POST" action="{{ route ('user.destroy',$userItem->id)}}" >
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          
          <button type="submit" class="btn btn-danger btn-sm " title="Eliminar" >
            <i class="fa fa-trash" ></i> Eliminar</button>  </td>
      </form> --}}

      
      </tr>
      
      @endforeach   
    </tr>
  </tbody>
</table>
</div>
{{$user->links()}}

  @endsection
    