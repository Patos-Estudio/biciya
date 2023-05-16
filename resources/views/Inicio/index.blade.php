<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiciManizales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('style_bici.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ff337f31f7.js" crossorigin="anonymous"></script>
  </head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="{{ asset('imagenes/inicio/logo.jpg') }}" alt="logo de la compañia" class="logo-img">
            <h2 class="nombre-empresa">Biciya</h2>
        </a>
        <nav>
            <ul>
                <li><a href="#" class="nav-link">Inicio</a></li>
                <li><a href="#" class="nav-link">Contacto</a></li>
                <li><button onclick="login_princi()" type="button">Acceder</button></li>
            </ul>       
        </nav>
    </header>

    <section class="container">
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slider1"src="{{ asset('imagenes/inicio/img1.jpg') }}" alt="">
                <img id="slider1"src="{{ asset('imagenes/inicio/img2.jpg') }}" alt="">
                <img id="slider1"src="{{ asset('imagenes/inicio/img3.jpg') }}" alt="">
                <img id="slider1"src="{{ asset('imagenes/inicio/img4.jpg') }}" alt="">
            </div>
            <div class="slider-nav">
                <a href="#slider1" class=""></a>
                <a href="#slider2" class=""></a>
                <a href="#slider3" class=""></a>
                <a href="#slider4" class=""></a>
            </div>
        </div>
    </section>


    <section class="contenedor-conocenos">
        <div class="contenedor-nosotros">
            <img src="{{ asset('imagenes/inicio/imag1.jpg') }}" alt="" class="imagen-conocenos" id="cambio">
            <div class="textos">
                <h1 class="titulo">Conocenos</h1>
                <p>Somos un servicio  brindado por la alcaldia de Manizales para dar un medio de transporte
                    sostenible y asi mejorar la movilidad local.
                </p>
            </div>
        </div>
    </section>

    <section class="contenedor-sobre">
        <div class="contenedor-nosotros">
            <div class="textos">
                <h1 class="titulo">Sobre nuestros servicios
                </h1>
                <p>
                    Ofrecemos un servicio de prestamo de bicicletas orientado a los ciudadanos
                    de cualquier edad que deseen movilizarce de un punto a otro. Contamos con 
                    diferentes estaciones a lo largo de toda la ciudad para asegurarnos que la 
                    mayor parte de la poblacion pueda tener su bicicleta disponible, ademas 
                    contamos con muchas unidades en cada estación y diferentes tipos de bicicletas
                    para las personas con beneficios.

                </p>
            </div>
            <img src="{{ asset('imagenes/inicio/imag2.jpg') }}" alt="" class="imagen-conocenos">
        </div>
    </section>

    <section class="contenedor-novedades">
        <div class="contenedor-nosotros">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('imagenes/inicio/not4.jpg') }}" class="d-block w-70" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Una ciudad al futuro</h5>
                      <p>Conozca los proyectos que actualmente se encuentran en marcha en la ciudad.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('imagenes/inicio/not5.jpg') }}" class="d-block w-70" alt="">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Manizales: Ciudad universitaria</h5>
                      <p>Manizales es la ciudad conocida como la ciudad universitaria con alrededor de 50.000 Estudiantes.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('imagenes/inicio/not6.jpg') }}" class="d-block w-70" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Manizales hoy</h5>
                      <p>Conozca las noticias mas actualizadas sobre lo que pasa hoy en la ciudad</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="hola">
                <h1 class="titulo">Novedades Manizales</h1>
                <p>Enterate de las novedades y noticias sobre la ciudad
                </p>
            </div>
        </div>
    </section>



    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <div class="red-social">
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-instagram"></a>
                    <a href="" class="fa fa-twitter"></a>
                </div>
            </div>
            <div class="box">
                <h2>Contacto pagina web</h2>
                <p>Calle x #4y - 2t</p>
                <p>Manizales, Caldas</p>
                <p>3107894905</p>
                <p>8907658</p>
            </div>
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="{{ asset('imagenes/inicio/logo.jpg') }}" alt="Logo de la empresa">
                    </a>
                </figure>
            </div>
        </div>

        <div class="grupo-2">
            <small>&copy; 2023 <b>Manizales en bici</b> - Algunos derechos reservados.</small>
        </div>

    </footer>



    <script src="{{ asset('bici.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>