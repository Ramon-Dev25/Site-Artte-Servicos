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
    <link href="{{ asset('css/blog.css')}}" rel="stylesheet">
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
                            <a class="nav-link" href="{{ route('service')}}">Nossos Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('blog')}}">Blog</a>
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



    <main class="container">
        <div class="p-5 p-md-4 mb-4 rounded text-body-emphasis bg-body-secondary" style="margin-top: 7rem; position:relative">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-4 fst-italic">Título da Notícia em Destaque</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                        efficiently about what’s most interesting in this post’s contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue Lendo...</a></p>
                </div>
                <div class="col-lg-6">
                    <div class="img-emphasis-blog">
                        <img src="{{asset('img/portaria.png')}}" alt="Notícia em Destaque">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-body-secondary">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{asset('img/news/1.jpg')}}" alt="" class="bd-placeholder-img" width="200" height="250">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-body-secondary">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pageTitle">Quem Somos?</h2>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12" style="margin-top: 4%;">
                    <img src="{{asset('img/logo.png')}}" alt="Logo Artte Serviços" class="img-logo-about" />
                </div>
                <div class="col-md-6 col-12" style="margin-top: 6%;">
                    <div class="card2">
                        <div class="bg">
                            <h2>História da Artte Serviços</h2>
                            <p>
                                A Artte Serviços surgiu para ser diferente, oriunda da união de profissinais com
                                mais de
                                15 anos de experiência em acabamentos gráficos, visando atender demandas
                                sazonais de
                                manuseio; aplicando tecnologia e treinamento.
                            </p>
                            <p>
                                Desenvolvemos metodologias de produção personalizadas para cada cliente, e
                                seguimos
                                padrões rigorosos de qualidade, onde temos profissinais capacitados para atuar
                                nos mais
                                diversos tipos de trabalhos de serviços de manuseios e também operações de carga
                                e
                                descarga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- MISSÃO, VISÃO E VALORES -->
        <section class="section-blue">
            <div class="container col-xxl-8 px-4 py-2">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="{{asset('img/missao.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Missão"
                            width="100%" height="100%" loading="lazy" id="missao-img">
                    </div>
                    <div class="col-lg-6">
                        <h2>Missão</h2>
                        <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                            worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                            responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container col-xxl-8 px-4 py-2" style="margin-top: 3rem">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <h2>Visão</h2>
                    <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                        responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                </div>
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{asset('img/visao.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Missão" width="100%"
                        height="100%" loading="lazy" id="visao-img">
                </div>
            </div>
        </div>

        <section class="section-value">
            <div class="content_white">
                <h2>Valores</h2>
                <p class="fontText">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                    a galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                    more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum. </p>
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