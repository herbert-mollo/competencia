@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{route('testimonials.create')}}" role="button">Crear</a>
<div class="table-responsive">
  <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion titulo</th>
      <th scope="col">Nombre cliente</th>
      <th scope="col">Imagen</th>
      <th scope="col">Accion</th>

    </tr>
  </thead>
  <tbody>
    @foreach($Testimonials as $TestimonialsItem )
    <!--Este foreach es para recorrer los datos de la tabla services con la nueva variable Agendaitem-->
    <tr>
      <td>{{ $TestimonialsItem->id }}</td>
      <td>{{ $TestimonialsItem->titulo }}</td>
      <td>{{ $TestimonialsItem->descripcion_titulo }}</td>
      <td><img src="{{ asset($TestimonialsItem->imagen) }}" style="width: 100px"  alt=""> </td>
      <td>{{ $TestimonialsItem->nombre_cli }}</td>

      <td>
      <div class="btn-group btn-group-justified" role="group">
        
          <a href="{{ route('testimonials.edit',$TestimonialsItem->id)}}" class="btn btn-success btn-sm ">
            <i class="fa fa-edit"></i>  
          </a>
          <a href="{{ route('testimonials.show',$TestimonialsItem->id)}}" class="btn btn-success btn-sm ">
            <i class="fas fa-eye"></i> 
          </a>
          <form method="POST" action="{{ route ('testimonials.destroy',$TestimonialsItem->id)}}" >
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
{{$Testimonials->links()}}

  @endsection
    