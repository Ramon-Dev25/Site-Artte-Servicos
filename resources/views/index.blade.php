<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Artte Serviços</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.2-web/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.min.js')}}">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="{{ asset('css/carousel.css')}}" rel="stylesheet">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }
  </style>
</head>

<body>
  <header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-primary">
      <div class="container-fluid">
        <a href="{{ route('index')}}">
          <img src="{{ asset('img/logo-branco.png')}}" alt="logo" class="logo-img">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0 d-flex" style="margin-right: 5rem;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('index')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quem Somos?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nossos Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Perguntas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Orçamento</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Slider -->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" style="padding-top: 6rem">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('img/slides/1.png')}}" class="bd-placeholder-img" width="100%" height="auto"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
          </svg>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Fim Slider -->
    <div class="content_white">
      <h2>Bem-Vindo a Artte Serviços</h2>
      <p class="fontText">A Artte Serviços surgiu para ser diferente, oriunda da união de profissionais com mais de 15
        anos de experiência, <br> visando oferecer soluções e melhorias em processos internos por meio de Consultoria em
        RH. <br> <br> Hoje, somos especialistas em Terceirização e Administração Pessoal, atuando com Headhunting,
        Projetos Especiais,<br> Terceirização de Limpeza, Portaria e Temporários, agindo com rigorosos padrões de
        qualidade. </p>
    </div>

    <div class="container marketing">
      <div class="row">

        <div class="col-md-3 feature_grid1 text-center"> <i class="fa fa-trophy fa-3x"></i>
          <h4 style="margin-top: 7%;">Ser Referência</h4>
          <p>Buscamos pela referência em terceirização, com alta qualidade e confiabilidade.</p>
        </div>

        <div class="col-md-3 feature_grid2 text-center"> <i class="fa fa-handshake fa-3x"></i>
          <h4 style="margin-top: 7%;">Compromisso</h4>
          <p>Compromisso com prazos e entregas, aliando agilidade à responsabilidade.</p>
        </div>

        <div class="col-md-3 feature_grid1 text-center"> <i class="fa fa-people-group fa-3x"></i>
          <h4 style="margin-top: 7%;">Equipes</h4>
          <p>Equipes qualificadas e dedicadas, pronta para atender às suas demandas com excelência.</p>
        </div>

        <div class="col-md-3 feature_grid2 text-center"> <i class="fa fa-circle-dollar-to-slot fa-3x"></i>
          <h4 style="margin-top: 7%;">Preço Justo</h4>
          <p>Preço competitivos e justos, com foco no retorno sobre inventimento do cliente.</p>
        </div>



      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span
              class="text-body-secondary">It’ll blow your mind.</span></h2>
          <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose
            here.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
              fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-body-secondary">See
              for yourself.</span></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this
            layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
              fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span
              class="text-body-secondary">Checkmate.</span></h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really
            intended to be actually read, simply here to give you a better view of what this would look like with some
            actual content. Your content.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
              fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
          </svg>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–2024 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>
  <!-- <link rel="stylesheet" href="> -->
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const navbar = document.querySelector('.navbar');

      window.addEventListener('scroll', function () {
        if (window.scrollY > 100) { // Ajuste o valor conforme necessário
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
    });

    document.addEventListener("DOMContentLoaded", function () {
      const navbarNav = document.querySelector('.navbar-nav');

      window.addEventListener('scroll', function () {
        if (window.scrollY > 100) { // Ajuste o valor conforme necessário
          navbarNav.classList.add('scrolled');
        } else {
          navbarNav.classList.remove('scrolled');
        }
      });
    });
  </script>
</body>

</html>