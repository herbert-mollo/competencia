@extends('layouts.app')

@section('content')
{{-- @if(session('datos'))
        <div class="alert alert-success alert.alert-dismissible fade show" role="alert">
          {{session('datos')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times</span>
          </button>
        </div>
        @endif --}}
  <a class="btn btn-primary" href="{{route('contact.create')}}" role="button">Crear</a>
  <div class="table-responsive">
    <table class="table table-hover table-dark">
     <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">direccion</th>
        <th scope="col">telefono</th>
        <th scope="col">email</th>
        <th scope="col">Acción</th>
    
      </tr>
    </thead>
    <tbody>
      @foreach($Contact as $ContactItem )
      <!--Este foreach es para recorrer los datos de la tabla services con la nueva variable Agendaitem-->
      <tr>
      
        <td>{{ $ContactItem->id }}</td>
        <td>{{ $ContactItem->titulo }}</td>
        <td>{{ $ContactItem->descripcion }}</td>
        <td>{{ $ContactItem->direccion }}</td>
        <td>{{ $ContactItem->telefono }}</td>
        <td>{{ $ContactItem->email }}</td>

        <td>
          <div class="btn-group btn-group-justified" role="group">
          
            <a href="{{ route('contact.edit',$ContactItem->id)}}" class="btn btn-success btn-sm ">
              <i class="fa fa-edit"></i>  
            </a>
            <a href="{{ route('contact.show',$ContactItem->id)}}" class="btn btn-success btn-sm ">
              <i class="fas fa-eye"></i> 
            </a>
            <form method="POST" action="{{ route('contact.destroy',$ContactItem->id)}}" >
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              
              <button type="submit" class="btn btn-danger btn-sm " title="Eliminar" >
                <i class="fa fa-trash" ></i> </button>  
            </form>
       
        </div>
      </td>

       
        
      </tr>
      
      @endforeach   
    </tbody>
  </table>
  </div>
  {{$Contact->links()}}

  @endsection
    

{{-- @include('plantilla.footer') --}}
