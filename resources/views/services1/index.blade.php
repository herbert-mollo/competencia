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
  <div><a class="btn btn-primary" href="{{route('services.create')}}" role="button">Crear</a></div>
  <div class="table-responsive">
    <table class="table table-hover table-dark">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Titulo Imagen</th>
        <th scope="col">Descripcion Imagen</th>
        <th scope="col">Imagen</th>
        <th scope="col">Acción</th>
    
      </tr>
    </thead>
    <tbody>
      @foreach($Services as $ServicesItem )
      <!--Este foreach es para recorrer los datos de la tabla services con la nueva variable Agendaitem-->
      <tr>
      
        <td>{{ $ServicesItem->id }}</td>
        <td>{{ $ServicesItem->titulo }}</td>
        <td>{{ $ServicesItem->descripcion }}</td>
        <td>{{ $ServicesItem->titulo_imagen }}</td>
        <td>{{ $ServicesItem->descripcion_imagen }}</td>
        <td><img src="{{ asset($ServicesItem->imagen) }}" style="width: 100px"  alt=""> </td>
        
        <td>
        <div class="btn-group btn-group-justified" role="group">
          
            <a href="{{ route('services.edit',$ServicesItem->id)}}" class="btn btn-success btn-sm ">
              <i class="fa fa-edit"></i>  
            </a>
            <a href="{{ route('services.show',$ServicesItem->id)}}" class="btn btn-success btn-sm ">
              <i class="fas fa-eye"></i> 
            </a>
            <form method="POST" action="{{ route ('services.destroy',$ServicesItem->id)}}" >
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
  {{$Services->links()}}

  @endsection


{{-- @include('plantilla.footer') --}}
