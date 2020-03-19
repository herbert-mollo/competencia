@extends('layouts.app')

@section('content')

<div><a class="btn btn-primary" href="{{route('blog.create')}}" role="button">Crear</a></div>

<div class="table-responsive">
  <table class="table table-hover table-dark ">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cargo</th>
      <th scope="col">Imagen</th>
      <th scope="col">Acción</th>
  
    </tr>
  </thead>
  <tbody>
    @foreach($Blog as $BlogItem )
    <!--Este foreach es para recorrer los datos de la tabla services con la nueva variable Agendaitem-->
    <tr>
      <td>{{ $BlogItem->id }}</td>
      <td>{{ $BlogItem->nombre }}</td>
      <td>{{ $BlogItem->cargo }}</td>
      <td><img src="{{ asset($BlogItem->imagen) }}" style="width: 100px"  alt=""> </td>
      <td>
        <div class="btn-group btn-group-justified" role="group">
        
          <a href="{{ route('blog.edit',$BlogItem->id)}}" class="btn btn-success btn-sm ">
            <i class="fa fa-edit"></i>  
          </a>
          <a href="{{ route('blog.show',$BlogItem->id)}}" class="btn btn-success btn-sm ">
            <i class="fas fa-eye"></i> 
          </a>
          <form method="POST" action="{{ route ('blog.destroy',$BlogItem->id)}}" >
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            
            <button type="submit" class="btn btn-danger btn-sm " title="Eliminar" >
              <i class="fa fa-trash" ></i> </button>  
        
     
      </div>
    </td>
     
      
    </tr>
    @endforeach  
  </tbody>
</table>
</div>
{{$Blog->links()}}

  @endsection
    