<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Maderería</title>

  @extends('Catalogo.madera-layout')
  @extends('Catalogo.nav-bar')

</head>

<body id="page-top">
  <!-- Navigation 
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Maderas de Calidad</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Tenemos las mejores maderas con una espectacular calidad!</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Ven y Cónocenos! Estamos seguros que regresarás por más.</p>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ asset('/catalogo') }}">Catálogo</a> <!-- Agregar el URL del catalogo    PREGUNTARLE AL PROFE    -->
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="listOfWoods">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Encuentra la madera que más te guste</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4"></p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#contact">Cotiza Ahora!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Lista Maderas 
  <section class="page-section bg-primary" id="listOfWoods">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 class="text-white mt-0">Lista Maderas</h2>
                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Tipo</th>
                          <th>Medidas</th>
                          <th>Grosor</th>
                          <th>Cantidad</th>
                          <th>Detalles</th>
                        <tr>
                      </thead>
                      <tbody>
                        (Arroba)foreach($maderas as $madera)
                           <tr>
                             <td>(Corchete) $madera->tipo }}</td>
                             <td>(Corchete) $madera->medida }}</td>
                             <td>(Corchete) $madera->grosor }}</td>
                             <td>(Corchete) $madera->cantidad }}</td>
                             <td>(Corchete) $madera->detalles }}</td>
                           </tr>
                        (Arroba)endforeach
                  </div>
            </div>
          </div>
        </div>
      </section> -->

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">A Tus Servicios</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2">Control de Calidad</h3>
            <p class="text-muted mb-0">Pide tu madera ahora en base a nuestro catálogo, siempre actualizado para un mejor servicio!</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2">Monitoreo de Envío</h3>
            <p class="text-muted mb-0">No tendrás que preocuparte por el lugar en dónde se encuentra tu madera, nosotros te ayudamos a que siempre sepas dónde está.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Accesibilidad Mundial</h3>
            <p class="text-muted mb-0">Para acceder no será necesario una dirección en particular, podrás acceder a tu cuenta desde cualquier parte del mundo.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Hecho con Amor</h3>
            <p class="text-muted mb-0">Nosotros sabemos lo que significa para ti la madera, por ello la manejamos con el mayor cuidado y atención.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Call to Action Section
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
      <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
    </div>
  </section> -->

  <!-- Contact Section -->
  <section class="page-section bg-dark text-white" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">A Tus Órdenes!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Nosotros sabemos lo complicado que pueden ser algunos envíos, incluso inseguros, por ellos nosotros somos la solución, tú tendrás control total e información al respecto de tu pedido, ¿Qué estás esperando? LLAMA YA!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (52) 338 501 9284</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:carlos247.avante@gmail.com">carlos247.avante@gmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - CarBraBun</div>
    </div>
  </footer>

</body>

</html>
