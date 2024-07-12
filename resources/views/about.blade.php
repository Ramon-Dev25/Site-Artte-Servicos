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
                            <a class="nav-link active" href="{{ route('about')}}">Quem Somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('service')}}">Nossos Serviços</a>
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
        <div class="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pageTitle">Quem Somos?</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <img src="{{asset('img/logo.png')}}" alt="Logo Artte Serviços" class="img-logo-about" />
                </div>
                <div class="col-md-6 col-12">
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

        <section class="section-gray">
            <div class="mv-container">
                <div class="mv-box">
                    <img src="{{asset('img/missao.jpg')}}" alt="Missão">
                    <h3>Missão</h3>
                    <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                        responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>

                </div>
                <div class="mv-box">
                    <!-- <img src="{{asset('img/visao.jpg')}}" alt="Visão"> -->
                    <h3>Visão</h3>
                    <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                        responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.
                    </p>
                </div>
            </div>
        </section>

        <!-- MISSÃO, VISÃO E VALORES -->

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{asset('img/missao.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Missão"
                        width="100%" height="100%" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h2>Missão</h2>
                    <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                        responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                </div>
            </div>
        </div>

        <div class="container col-xxl-8 px-4 py-5" style="margin-top: 3rem">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-lg-6">
                    <h2>Visão</h2>
                    <p>Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        worlds most popular front-end open source toolkit, featuring Sass variables and mixins,
                        responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                </div>
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{asset('img/visao.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Missão" width="100%"
                        height="100%" loading="lazy">
                </div>
            </div>
        </div>

        <div class="content_white">
            <h2>Bem-Vindo a Artte Serviços</h2>
            <p class="fontText">A Artte Serviços surgiu para ser diferente, oriunda da união de profissionais com mais
                de 15
                anos de experiência, <br> visando oferecer soluções e melhorias em processos internos por meio de
                Consultoria em
                RH. <br> <br> Hoje, somos especialistas em Terceirização e Administração Pessoal, atuando com
                Headhunting,
                Projetos Especiais,<br> Terceirização de Limpeza, Portaria e Temporários, agindo com rigorosos padrões
                de
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

            <hr class="featurette-divider">

            <div class="container">
                <div class="content_white">
                    <h2> Nossos Serviços </h2>
                </div>

                <div class="row">

                    <div class="row">
                        <div class="col-sm-4 info-blocks">
                            <i class="icon-info-blocks fa fa-sign-language"></i>
                            <div class="info-blocks-in">
                                <h3>Auxiliar de Limpeza</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro
                                    consequatur aliquam,
                                    incidunt</p>
                            </div>
                        </div>
                        <div class="col-sm-4 info-blocks">
                            <i class="icon-info-blocks fa fa-cubes"></i>
                            <div class="info-blocks-in">
                                <h3>Auxiliar de Logística</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro
                                    consequatur aliquam,
                                    incidunt</p>
                            </div>
                        </div>
                        <div class="col-sm-4 info-blocks">
                            <i class="icon-info-blocks fa fa-id-card"></i>
                            <div class="info-blocks-in">
                                <h3>Controlador de Acesso</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro
                                    consequatur aliquam,
                                    incidunt</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 info-blocks ">
                            <i class="icon-info-blocks fa fa-leaf"></i>
                            <div class="info-blocks-in">
                                <h3>Jardinagem</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro
                                    consequatur aliquam,
                                    incidunt</p>
                            </div>
                        </div>
                        <div class="col-sm-4 info-blocks">
                            <i class="icon-info-blocks fa fa-home"></i>
                            <div class="info-blocks-in">
                                <h3>Portaria</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro
                                    consequatur aliquam,
                                    incidunt</p>
                            </div>
                        </div>
                        <div class="col-sm-4 info-blocks">
                            <i class="icon-info-blocks fa fa-user-circle"></i>
                            <div class="info-blocks-in">
                                <h3>Recepção</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro
                                    consequatur aliquam,
                                    incidunt</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <hr class="featurette-divider">
            <div class="container">
                <div class="content_white">
                    <h2> Principais Notícias </h2>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <h5 class="news">Título da Notícia 1</h5>
                        <div class="card">
                            <a href="#" class="news_button">
                                <img src="{{asset('img/news/1.jpg')}}" alt="Notícia 1">
                                <div class="card__content">
                                    <p class="card__title">Card Title</p>
                                    <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation
                                        ullamco.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="news">Título da Notícia 2</h5>
                        <div class="card">
                            <a href="#" class="news_button">
                                <img src="{{asset('img/news/2.jpg')}}" alt="Notícia 1">
                                <div class="card__content">
                                    <p class="card__title">Card Title</p>
                                    <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation
                                        ullamco.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="news">Título da Notícia 3</h5>
                        <div class="card">
                            <a href="#" class="news_button">
                                <img src="{{asset('img/news/3.jpg')}}" alt="Notícia 1">
                                <div class="card__content">
                                    <p class="card__title">Card Title</p>
                                    <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation
                                        ullamco.</p>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>
            </div>

            <!-- REDES SOCIAIS -->
            <ul class="wrapper" style="margin-top: 5rem;">
                <a class="redeSocial" href="#" data-placement="top">
                    <li class="icon whatsapp">
                        <span class="tooltip">WhatsApp</span>
                        <i class="fa-brands fa-whatsapp" style="font-size: 1.6em"></i>
                    </li>
                    </li>
                </a>
                <a class="redeSocial" href="#" data-placement="top">
                    <li class="icon instagram">
                        <span class="tooltip">Instagram</span>
                        <i class="fa-brands fa-instagram" style="font-size: 1.5em"></i>
                    </li>
                </a>
                <a class="redeSocial" href="#" data-placement="top">
                    <li class="icon facebook">
                        <span class="tooltip">Facebook</span>
                        <i class="fa-brands fa-facebook-f" style="font-size: 1.2em"></i>
                    </li>
                    </li>
                </a>
                <a class="redeSocial" href="#" data-placement="top">
                    <li class="icon linkedin">
                        <span class="tooltip">Linkedin</span>
                        <i class="fa-brands fa-linkedin-in" style="font-size: 1.2em"></i>
                    </li>
                </a>
            </ul>
            <!-- FIM REDES SOCIAIS -->

        </div><!-- /.container -->


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