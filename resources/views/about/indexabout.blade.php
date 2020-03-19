@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{route('about.create')}}" role="button">Crear</a>
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
    @foreach($About as $aboutItem )
    <!--Este foreach es para recorrer los datos de la tabla services con la nueva variable Agendaitem-->
    <tr>
      <td>{{ $aboutItem->id }}</td>
      <td>{{ $aboutItem->titulo }}</td>
      <td>{{ $aboutItem->descripcion }}</td>
      <td><img src="{{ asset($aboutItem->imagen) }}" style="width: 100px"  alt=""> </td>

      <div class="btn-group" role="group">
        <td>
          <div class="btn-group" role="group">
            <td>
              <a href="{{ route('about.edit',$aboutItem->id)}}" class="btn btn-success btn-sm ">
                <i class="fas fa-edit"></i>
              </a>
              <a href="{{ route('about.show',$aboutItem->id)}}" class="btn btn-success btn-sm ">
                <i class="fas fa-eye"></i> 
              </a>
              <form method="POST" action="{{ route ('about.destroy',$aboutItem->id)}}" >
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                
                <button type="submit" class="btn btn-danger btn-sm " title="Eliminar" >
                  <i class="fa fa-trash" ></i> </button>  
            </td>
         
          </div>
   

     
      
    </tr>
    @endforeach   
  </tbody>
</table>
</div>
  {{$About->links()}}
  @endsection
    