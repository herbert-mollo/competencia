@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{route('home.create')}}" role="button">Crear</a>
<div class="table-responsive">
  <table class="table table-hover table-dark">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Imagen</th>
      <th scope="col">Acción</th>
  
    </tr>
  </thead>
  <tbody>
    @foreach($Home as $homeItem )
    <!--Este foreach es para recorrer los datos de la tabla services con la nueva variable Agendaitem-->
    <tr>
      <td>{{ $homeItem->id }}</td>
      <td>{{ $homeItem->titulo }}</td>
      <td>{{ $homeItem->descripcion }}</td>
      <td><img src="{{ asset($homeItem->imagen) }}" style="width: 100px"  alt=""> </td>
              
      <td>
      <div class="btn-group btn-group-justified" role="group">
          <a href="{{ route('home.edit',$homeItem->id)}}" class="btn btn-success btn-sm ">
            <i class="fas fa-edit"></i>
          </a>
          <a href="{{ route('home.show',$homeItem->id)}}" class="btn btn-success btn-sm ">
            <i class="fas fa-eye"></i> 
          </a>
          <form method="POST" action="{{ route ('home.destroy',$homeItem->id)}}" >
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            
            <button type="submit" class="btn btn-danger btn-sm " title="Eliminar" >
              <i class="fas fa-trash-alt"></i> </button>  
        
     
      </div>
     </td>
      
    </tr>
    @endforeach   
  </tbody>
</table>
</div>

{{$Home->links()}}
  @endsection
    