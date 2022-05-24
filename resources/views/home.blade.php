@extends('app')

@section('content')

@include('layouts.navbar')

<!-- ======= Intro Section ======= -->
<div id="home" class="intro route bg-image" style="background-image: url(assets/img/work.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h1 class="intro-title mb-4">Hola, Soy Jovani Martinez </h1>
                <p class="intro-subtitle"><span class="text-slider-items">Ingeniero en Software, Desarrollador Web,
                        Desarollador de Software</span><strong class="text-slider"></strong></p>
                <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
        </div>
    </div>
</div><!-- End Intro Section -->

<!-- ======= About Section ======= -->
<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full pt-4 pb-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-me pt-4 pt-md-0">
                                <div class="title-box-2">
                                    <h5 class="title-left text-center">
                                        SOBRE MÍ
                                    </h5>
                                </div>
                                <p class="lead text-justify">
                                Soy un profesionista con 2 años de experiencia en el desarrollo de aplicaciones web, involucrado en
actividades de backend, así como de frontend, aplicando distintas tecnologías. Me considero una
persona enfocada a resultados y habituado a trabajar por objetivos, ademas de autodidacta y con una
gran facilidad de colaborar y trabajar en equipo.
                                </p>
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <a href="{{route('download-cv')}}" style="color: #18567B;">
                                        <img class="" src="assets/img/pdf.png" class="img-fluid" style="width: 20px;" alt="pdf"> 
                                            Descargar curriculum 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- ======= Habilities Section ======= -->
<div class="section-counter paralax-mf bg-image pt-4 pb-4" style="background-image: url(assets/img/overlay.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row mb-5 mt-3">
            <div class="col-12">
                <h3 class=" title-a text-center" style="color:white">HABILIDADES</h3>
                <div class="line-white"></div>
            </div>
        </div>
        <div class="row mb-lg-5" style="color:white; vertical-align: middle;">
            <div class="col-sm col-lg-3 work-habilities text-center mb-lg-4">
                <div class="work-img pt-2">
                    <img src="assets/img/html1.png" class="img-fluid" style="width: 150px; height: 155px;" alt="html">
                    <div class="counter-num">
                        <p class="counter-text">HTML, CSS, JavaScript</p>
                    </div>
                </div>

            </div>
            <div class="col-sm col-lg-3 work-habilities text-center">
                <div class="work-img pt-4">
                    <img src="assets/img/bootstrap.png" class="img-fluid" style="width: 150px;" alt="bootstrap">
                    <div class="counter-num">
                        <span class="counter-text">Bootstrap</span>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3 work-habilities text-center ">
                <div class="work-img pt-3">
                    <img class="mb-lg-5" src="assets/img/php.png" class="img-fluid" style="width: 190px;" alt="php">
                    <div class="counter-num">
                        <span class="counter-text">PHP</span>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3 work-habilities text-center mb-lg-4">
                <div class="work-img pt-3">
                    <img class="mb-lg-3" src="assets/img/laravel.png" class="img-fluid" style="width: 150px; height:130px"
                        alt="laravel">
                    <div class="counter-num">
                        <span class="counter-text">Laravel</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="color:white; vertical-align: middle;">
            <div class="col-sm col-lg-3  work-habilities text-center mb-lg-4">
                <div class="work-img pt-3">
                    <img src="assets/img/vue1.png" class="img-fluid mb-lg-1" style="width: 130px; height: 145px;" alt="vue">
                    <div class="counter-num">
                        <p class="counter-text">Vue js </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3 work-habilities text-center">
                <div class="work-img pt-3">
                    <img class="rounded mb-lg-2" src="assets/img/angular.png" class="img-fluid" style="width: 135px;"
                        alt="angular">
                    <div class="counter-num">
                        <span class="counter-text">Angular</span>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3 work-habilities text-center">
                <div class="work-img pt-3">
                    <img src="assets/img/node.png" class="img-fluid" style="width: 155px;" alt="node">
                    <div class="counter-num">
                        <span class="counter-text">Node js</span>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3 work-habilities text-center">
                <div class="work-img pt-3">
                    <img src="assets/img/github.png" class="img-fluid" style="width: 150px;" alt="github">
                    <div class="counter-num">
                        <span class="counter-text">GitHub</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="color:white; vertical-align: middle;">
            <div class="col-sm col-lg-3 work-habilities text-center">
                <div class="work-img pt-3">
                    <img class="bg-white rounded mb-lg-2" src="assets/img/mysql.png" class="img-fluid" style="width: 145px;"
                        alt="mysql">
                    <div class="counter-num">
                        <span class="counter-text">MySQL</span>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3  work-habilities text-center mb-lg-4">
                <div class="work-img pt-3">
                    <img src="assets/img/mongo.png" class="img-fluid mb-lg-1" style="width: 130px; height: 145px;" alt="vue">
                    <div class="counter-num">
                        <p class="counter-text">MongoDB </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End habilities Section -->

<!-- ======= Services Section ======= -->
<section id="service" class="services-mf pt-5 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        SERVICIOS
                    </h3>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-monitor"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Desarrollo Web</h2>
                        <p class="s-description text-justify">
                            Una página web optimizada, altamente efectiva y visualmente atractiva le permite a tu
                            empresa dar a conocer los productos y servicios que ofrece, los trabajos y proyectos, como
                            ubicarte y contactarte de la forma más fácil y rápida.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Diseño Responsive</h2>
                        <p class="s-description text-justify">
                            Que tu sitio web se adapte a los diferentes dispositivos del mercado es un aspecto muy
                            importante ya que esta es tu carta de presentación con los clientes y es necesario brindar
                            un experiencia agradable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-code-working"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Usabilidad</h2>
                        <p class="s-description text-justify">
                            La usabilidad es la calidad de la experiencia del usuario al interactuar con una página web.
                            El sitio debe ser cómodo y rápido para el usuario. Si se desarrolla de manera coherente el
                            cliente encontrará lo que busca de forma intuitiva y rápida.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        PROYECTOS
                    </h3>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="work-box">
                    <a href="assets/img/proyects/notes/1.jpg" data-gall="portfolioGallery" class="venobox">
                        <div class="work-img">
                            <img src="assets/img/proyects/notes/1.jpg" alt="notes" class="img-fluid"
                                style="height: 235px">
                        </div>
                    </a>
                    <div class="work-content">
                        <div class="row">
                            <div class="col-md-9">
                                <h2 class="w-title">Web para gestión de notas</h2>
                                <div class="w-more">
                                    <span class="w-ctegory">Desarrollo web</span> / <span class="w-date">2020</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="w-like">
                                    <a href="{{ route('notes') }}"> <span
                                            class="ion-ios-plus-outline"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-box">
                    <a href="assets/img/proyects/chat/1jpg" data-gall="portfolioGallery" class="venobox">
                        <div class="work-img">
                            <img src="assets/img/proyects/chat/1.jpg" alt="chat" class="img-fluid"
                                style="height: 235px ">
                        </div>
                    </a>
                    <div class="work-content">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2 class="w-title">Chat Realtime</h2>
                                <div class="w-more">
                                    <span class="w-ctegory">Desarrollo web</span> / <span class="w-date">2020</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="w-like">
                                    <a href="{{route('chat')}}"> <span class="ion-ios-plus-outline"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-box">
                    <a href="assets/img/proyects/ecommerce/1.jpg" data-gall="portfolioGallery" class="venobox">
                        <div class="work-img">
                            <img src="assets/img/proyects/ecommerce/principal.jpg" alt="" class="img-fluid"
                                style="height: 235px ">
                        </div>
                    </a>
                    <div class="work-content">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2 class="w-title">Tienda en linea </h2>
                                <div class="w-more">
                                    <span class="w-ctegory">Desarrollo web</span> / <span class="w-date">2021</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="w-like">
                                    <a href="{{route('ecommerce')}}"> <span class="ion-ios-plus-outline"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Courses Section ======= -->
<div id="courses" class="section-counter paralax-mf bg-image pt-4 pb-4" style="background-image: url(assets/img/course.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row mb-5 mt-3">
            <div class="col-12">
                <h3 class=" title-a text-center" style="color:white">CURSOS</h3>
                <div class="line-white"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="work-box">
                    <a href="assets/img/courses/css.png" data-gall="portfolioGallery" class="venobox">
                        <div class="work-img">
                            <img src="assets/img/courses/css.png" alt="notes" class="img-fluid"
                                style="width:360px; height: 235px">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-box">
                    <a href="assets/img/courses/chat.png" data-gall="portfolioGallery" class="venobox">
                        <div class="work-img">
                            <img src="assets/img/courses/chat.png" alt="chat" class="img-fluid"
                                style="width:360px; height: 235px ">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-box">
                    <a href="assets/img/courses/laravel.png" data-gall="portfolioGallery" class="venobox">
                        <div class="work-img">
                            <img src="assets/img/courses/laravel.png" alt="" class="img-fluid"
                                style="width:360px; height: 235px ">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Courses Section -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="services-mf  route">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="contact-mf">
                <div class="box-shadow-full pt-5">
                    <div class="row">
                        <div class="col">
                            <div class="title-box text-center mb-3">
                                <h3 class="title-a">
                                    CONTACTO
                                </h3>
                                <div class="line-mf"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-6 pt-4 pl-md-5 text-center">
                            <div class="more-info pl-md-4" style="vertical-align: middle">
                                <ul class="list-ico ">
                                    <li><span class="ion-ios-location"></span> <span class="lead">Toluca, México</span></li>
                                    <li><span class="ion-ios-telephone"></span> <span class="lead">+52 7292908043</span></li>
                                    <li><span class="ion-email"></span> <span class="lead">ing.jovani.mr@gmail.com</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="title-box-2">
                                <h5 class="title-left">
                                    Redes sociales
                                </h5>
                            </div>
                                <div class="socials pt-0" >
                                    <ul>
                                        <li><a href="https://github.com/JovaniMR" target="_blank"><span class="ico-circle" style="vertical-align: middle"><i
                                            class="ion-social-github"></i></span></a></li>
                                        <li><a href="https://www.facebook.com/jovany.martinez.39/" target="_blank"><span class="ico-circle" style="vertical-align: middle;"><i
                                                        class="ion-social-facebook"></i></span></a></li>
                                        <li><a href="https://wa.me/17292908043" target="_blank"><span class="ico-circle" style="vertical-align: middle;"><i
                                                        class="ion-social-whatsapp" ></i></span></a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</section><!-- End Contact Section -->
