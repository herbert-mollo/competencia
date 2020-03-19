@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{route('galleri.create')}}" role="button">Crear</a>
<div class="table-responsive">
  <table class="table table-hover table-dark">  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Nombre Imagen</th>
      <th scope="col">Imagen</th>
      <th scope="col">Acción</th>
  
    </tr>
  </thead>
  <tbody>
    @foreach($Galleri as $GalleriItem )
    <!--Este foreach es para recorrer los datos de la tabla services con la nueva variable Agendaitem-->
    <tr>
      <td>{{ $GalleriItem->id }}</td>
      <td>{{ $GalleriItem->titulo }}</td>
      <td>{{ $GalleriItem->descripcion }}</td>
      <td>{{ $GalleriItem->Nombre_imagen }}</td> 
      <td><img src="{{ asset($GalleriItem->imagen) }}" style="width: 100px"  alt=""> </td>
      <td>
        <div class="btn-group btn-group-justified" role="group">
        
          <a href="{{ route('galleri.edit',$GalleriItem->id)}}" class="btn btn-success btn-sm ">
            <i class="fa fa-edit"></i>  
          </a>
          <a href="{{ route('galleri.show',$GalleriItem->id)}}" class="btn btn-success btn-sm ">
            <i class="fas fa-eye"></i> 
          </a>
          <form method="POST" action="{{ route ('galleri.destroy',$GalleriItem->id)}}" >
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
{{$Galleri->links()}}

  @endsection
    