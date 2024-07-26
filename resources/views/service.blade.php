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
    <link href="{{ asset('css/features.css')}}" rel="stylesheet">
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
                            <a class="nav-link" aria-current="page" href="{{ route('index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about')}}">Quem Somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('service')}}">Nossos Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('questions')}}">Perguntas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('budgets')}}">Orçamento</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <main>
        <div class="container col-xxl-8 px-4 py-2" style="margin-top: 5rem; margin-bottom: 6rem;">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <h2>Nossos Serviços</h2>
                    <p>Um resumo sobre os serviços prestados. <br> Quickly design and customize responsive mobile-first
                        sites with Bootstrap, the
                        worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                        responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                </div>
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{asset('img/servico-img.jpeg')}}" class="img-service">
                </div>
            </div>
        </div>

        <!-- <section class="section-blue-service">
            <div class="container px-4 py-5" id="custom-cards">
                <div class="row row-cols-1 row-cols-lg-3 align-items-center g-1 py-1">

                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden  rounded-4 shadow-lg"
                            style="background-image: url('img/limpeza.png');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h4 class="pt-4 mt-6 mb-4 display-5 lh-1 fw-bold">Auxiliar de Limpeza</h4>
                                <span>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                                    worlds most popular front-end open source toolkit</span>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden  rounded-4 shadow-lg"
                            style="background-image: url('img/limpeza.png');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h4 class="pt-4 mt-6 mb-4 display-5 lh-1 fw-bold">Auxiliar de Limpeza</h4>
                                <span>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                                    worlds most popular front-end open source toolkit</span>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden  rounded-4 shadow-lg"
                            style="background-image: url('img/limpeza.png');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h4 class="pt-4 mt-6 mb-4 display-5 lh-1 fw-bold">Auxiliar de Limpeza</h4>
                                <span>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                                    worlds most popular front-end open source toolkit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container px-4 py-5" id="custom-cards">
                <div class="row row-cols-1 row-cols-lg-3 align-items-center g-1 py-1">

                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden  rounded-4 shadow-lg"
                            style="background-image: url('img/limpeza.png');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h4 class="pt-4 mt-6 mb-4 display-5 lh-1 fw-bold">Auxiliar de Limpeza</h4>
                                <span>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                                    worlds most popular front-end open source toolkit</span>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden  rounded-4 shadow-lg"
                            style="background-image: url('img/limpeza.png');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h4 class="pt-4 mt-6 mb-4 display-5 lh-1 fw-bold">Auxiliar de Limpeza</h4>
                                <span>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                                    worlds most popular front-end open source toolkit</span>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden  rounded-4 shadow-lg"
                            style="background-image: url('img/limpeza.png');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h4 class="pt-4 mt-6 mb-4 display-5 lh-1 fw-bold">Auxiliar de Limpeza</h4>
                                <span>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                                    worlds most popular front-end open source toolkit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <section class="section-blue-service">
            <!-- <div class="services-container">
                <img src="{{asset('img/limpeza.png')}}" alt="Auxiliares de limpeza" class="img-limp">
                <h3>Auxiliar de Limpeza</h3>
                <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                    worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                    responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            </div> -->
            <div class="container col-xxl-8 px-4 py-2">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="{{asset('img/limpeza.png')}}" class="d-block mx-lg-auto img-fluid"
                            alt="auxiliares de limpeza" width="80%" height="80%" loading="lazy" id="service-img">
                    </div>
                    <div class="col-lg-6">
                        <h2>Auxiliar de Limpeza</h2>
                        <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                            worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                            responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container col-xxl-8 px-4 py-2" style="margin-bottom: 6rem;">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-lg-6">
                        <h2>Jardinagem</h2>
                        <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                            worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                            responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="{{asset('img/jardinagem.png')}}" class="d-block mx-lg-auto img-fluid"
                            alt="auxiliares de limpeza" width="80%" height="80%" loading="lazy" id="missao-img">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-blue-service">
            <div class="container col-xxl-8 px-4 py-2">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="{{asset('img/logistica.png')}}" class="d-block mx-lg-auto img-fluid"
                            alt="auxiliares de limpeza" width="80%" height="80%" loading="lazy" id="service-img">
                    </div>
                    <div class="col-lg-6">
                        <h2>Auxiliar de Logística</h2>
                        <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                            worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                            responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container col-xxl-8 px-4 py-2" style="margin-bottom: 6rem;">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-lg-6">
                        <h2>Portaria</h2>
                        <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                            worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                            responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="{{asset('img/portaria.png')}}" class="d-block mx-lg-auto img-fluid"
                            alt="auxiliares de limpeza" width="80%" height="80%" loading="lazy" id="missao-img">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-blue-service">
            <div class="container col-xxl-8 px-4 py-2">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="{{asset('img/controle.png')}}" class="d-block mx-lg-auto img-fluid"
                            alt="auxiliares de limpeza" width="80%" height="80%" loading="lazy" id="service-img">
                    </div>
                    <div class="col-lg-6">
                        <h2>Controlador de Acesso</h2>
                        <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                            worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                            responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container col-xxl-8 px-4 py-2">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-lg-6">
                        <h2>Recepção</h2>
                        <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                            worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                            responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    </div>
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="{{asset('img/recepcao.png')}}" class="d-block mx-lg-auto img-fluid"
                            alt="auxiliares de limpeza" width="80%" height="80%" loading="lazy" id="missao-img">
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <div class="container-footer">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

                <h6 class="col-md-4 mb-0 text-white">&copy; Artte Serviços</h6>
                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><span class="nav-link px-1 text-white">Contato: <strong>(11)
                                4138-7660</strong></span>
                    </li>
                </ul>
                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item"><span class="nav-link px-1 text-white">E-mail:
                            <strong>contato@artteservicos.com.br</strong></span></li>
                </ul>

                <p class="col-md-4 mb-0 text-white">Criado por Ramon Fernandes</p>
            </footer>
        </div>
        <div class="footer-bg-end"></div>


    </main>
    <!-- <link rel="stylesheet" href="> -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const elements = document.querySelectorAll('.section-blue-service');

            function checkVisibility() {
                elements.forEach(element => {
                    const rect = element.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom >= 0) {
                        element.classList.add('animate');
                    }
                });
            }

            window.addEventListener('scroll', checkVisibility);
            checkVisibility(); // Verifica a visibilidade ao carregar a página
        });
    </script>
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