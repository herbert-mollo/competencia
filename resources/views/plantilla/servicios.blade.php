{{-- @extends('plantilla.plantilla')
@section('titulo','Agenda')

@section('contenido')
{{-- @if(session('datos')) --}}
        <div class="alert alert-success alert.alert-dismissible fade show" role="alert">
          {{session('datos')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times</span>
          </button>
        </div>
        @endif
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="#page-top"><img src="imgs/LOGO.png" alt=""></a> </div>
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand page-scroll" href="#page-top"><img src="imgs/LOGO.png" alt=""></a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#page-top"  class="page-scroll">Home</a></li>
          <li><a href="#about" class="page-scroll">Nosotros</a></li>
        <li><a href="#services" class="page-scroll">Servicios</a></li>
          <li><a href="#portfolio" class="page-scroll">Galeria</a></li>
          <li><a href="#testimonials" class="page-scroll">Testimonios</a></li>
          <li><a href="#team" class="page-scroll">Equipo</a></li>
          <li><a href="#contact" class="page-scroll">Contacto</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
  </nav>
  <div class="row float-right">
    <a href="{{route('services.create')}}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
    </div>
  <div class="row float-right">
    <a href="{{route('services.edit')}}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
  </div>
  <div class="row float-right">
    <a href="{{route('services.update')}}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
    </div>
 <div class="row float-right">
        <a href="{{route('services.update')}}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
        </div>
 
  
  @endsection
@include('plantilla.footer') --}}
