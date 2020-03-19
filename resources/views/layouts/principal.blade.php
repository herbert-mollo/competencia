<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Bit Project</title>
{{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Stylesheet

    ================================================== -->
{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img src="imgs/loguito.png" alt=""></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top"  class="page-scroll">Home</a></li>
        <li><a href="#about" class="page-scroll">Nosotros</a></li>
        <li><a href="#services" class="page-scroll">Servicios</a></li>
        <li><a href="#portfolio" class="page-scroll">Galeria</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonios</a></li>
        <li><a href="#blog" class="page-scroll">Blog</a></li>
        <li><a href="#contact" class="page-scroll">Contacto</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        @foreach ($home as $itemhome)
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1> {{$itemhome->titulo}} </h1>
            <p>{{$itemhome->descripcion}}</p>
            <a href="#contact" class="btn btn-custom btn-lg page-scroll">Mas informacion</a> </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</header>
<!-- Features Section -->
<!--<div id="features" class="text-center">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title">
      <h2>Features</h2>
    </div>
    <div class="row">
      <div class="col-xs-6 col-md-3"> <i class="fa fa-comments-o"></i>
        <h3>Lorem ipsum</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-bullhorn"></i>
        <h3>Dolor sit amet</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-group"></i>
        <h3>Tempus eleifend</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-magic"></i>
        <h3>Pellentesque</h3>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
      </div>
    </div>
  </div>
</div> 
-->
<!-- About Section -->
<div id="about">
  <div id="about1">
  <div class="container">
    @foreach ($about as $itemabout)
        <div class="row">
      <div class="col-xs-12 col-md-6" > <img src="imgs/mamanimamani.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2 class="color1"> QUIEN ES <span class="color2">Mamani Mamani?</span></h2>
          <p id="derecha">
            {{$itemabout->descripcion}}
          </p>
          {{-- <h3>Why Choose Us?</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Lorem ipsum dolor</li>
                <li>Tempor incididunt</li>
                <li>Lorem ipsum dolor</li>
                <li>Incididunt ut labore</li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Aliquip ex ea commodo</li>
                <li>Lorem ipsum dolor</li>
                <li>Exercitation ullamco</li>
                <li>Lorem ipsum dolor</li>
              </ul>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    @endforeach
  </div>
 </div>
</div>
<!-- Services Section -->
<div id="services" class="text-center">
  <div> 
  <div class="container">
    

    <div class="section-title">
      <h2>Nuestros Servicios</h2>
      <p>Lorem Ipsum es un texto de marcador de posición comúnmente utilizado en las industrias gráficas, gráficas y editoriales para previsualizar diseños y maquetas visuales.</p>
    </div>

    <div class="row">
      @foreach ($services as $itemservices)

      <div class="col-md-4"> <img src="{{ asset($itemservices->imagen) }}" alt="">
        <div class="service-desc">
          <h3> {{$itemservices->titulo_imagen}} </h3>
          <p> {{$itemservices->descripcion_imagen}} </p>
        </div>
      </div>
      @endforeach     
      </div>    
    </div>
    </div>
  </div>

    <!-- Gallery Section -->
<div id="portfolio" class="text-center">
  <div class="container " >
    <div class="section-title">
      <h2 class="color1">Galeria de <span class="color2">trabajos</span></h2>
      <p> 
        Lorem Ipsum es un texto de marcador de posición comúnmente utilizado en las industrias gráficas, gráficas y editoriales para previsualizar diseños y maquetas visuales.
      </p>
    </div>
    <div class="row">
      @foreach ($galleri as $itemgalleri)
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ asset($itemgalleri->imagen) }}" title="{{$itemgalleri->Nombre_imagen}}" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>
                  {{$itemgalleri->Nombre_imagen}}
                </h4>
              </div>
              <img src="{{ asset($itemgalleri->imagen) }}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
      @endforeach 
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials">
  <div class="overlay">
  <div class="container">
    <div class="section-title text-center">
      <h2 class="color1">Algunos de nuestros <span class="color2">clientes</span></h2>
    </div>
    <div class="row">
      @foreach ($testimonials as $itemtestimonials)
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="{{ asset($itemtestimonials->imagen) }}" alt=""> </div>
          <div class="testimonial-content">
            <p>{{$itemtestimonials->descripcion_titulo}}</p>
            <div class="testimonial-meta"> 
              {{$itemtestimonials->nombre_cli}}
            </div>
          </div>
        </div>
      </div>
      @endforeach
      </div>
    </div>
  </div>
</div>
<!-- Blog Section -->
<div id="blog" class="text-center">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2 class="color1">Articulos del<span class="color2">BLOG</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    <div id="row" >
      @foreach ($blog as $itemblogs)
      <div class="col-md-3 col-sm-6 blog">
        <div class="thumbnail"> <img src="{{ asset($itemblogs->imagen) }}" alt="..." class="blog-img">
          <div class="caption">
            <h4>
              {{$itemblogs->nombre}}
            </h4>
            <p>
              {{$itemblogs->cargo}}
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    </div>
    <a href="#features" class="btn btn-custom btn-lg page-scroll">Ver Mas</a> </div>
  </div>

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        {{-- @if (session('flash_message'))
            <div class="alert alert-success">
                {{ session('flash_message') }}
            </div>
        @endif --}}
        <div class="section-title">
          <h2>Contactanos</h2>
          <p>Complete el siguiente formulario para enviarnos un correo electrónico y nos pondremos en contacto con usted lo antes posible.</p>
        </div>
      <form method="POST" enctype="multipart/form-data" name="sentMessage" id="contactForm" novalidate action="{{url('/contacto')}}" onsubmit="return validar();" >
        {{csrf_field()}}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"  required>
                {{-- <div class="invalid-feedback">
                  Es necesario llenar el espacio.
                </div> --}}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                {{-- <div class="invalid-feedback">
                  Es necesario llenar el espacio.
                </div> --}}
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="mensaje" id="mensaje" class="form-control" rows="4" placeholder="Mensaje" required></textarea>
            {{-- <div class="invalid-feedback">
              Es necesario llenar el espacio.
            </div>          --}}
           </div>
          <div id="success"></div>
          
          <input  type="file" id="archivo" name="archivo" >
         
          <button type="submit" onclick=' return archivos();' class="btn btn-custom btn-lg">Enviar</button>
        
        </form>
        <div id='error'>

        </div>
      </div>
    </div>

    @foreach ($contact as $itemcontact)
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h3>Info Contacto</h3>
        <p><span><i class="fa fa-map-marker"></i> Direccion</span> 
          {{$itemcontact->direccion}}
          </p>
      </div>
      <div class="contact-item">
        <p><span><i class="fa fa-phone"></i> Telefono</span> 
          {{$itemcontact->telefono}}
          <br></p>
      </div>
      <div class="contact-item">
        <p><span><i class="fa fa-envelope-o"></i> Correo Electronico</span> 
          {{$itemcontact->email}}
          <br></p>
      </div>
    </div>
    @endforeach
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>Copyright © 2019 by BitProject</p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/validacion_formulario.js"></script>
</body>
</html>