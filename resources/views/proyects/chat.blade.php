@extends('app')

@section('content')

@include('layouts.short-navbar')

<div class="intro intro-single route bg-image" style="background-image: url(assets/img/proyects/chat/1.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Chat Realtime</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="#">Proyectos</a>
                    </li>
                    <li class="breadcrumb-item active">Chat</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<!-- ======= Portfolio Details Section ======= -->
<section class="portfolio-details">
    <div class="container">
        <div class="portfolio-details-container">
            <div class="owl-carousel portfolio-details-carousel">
                <img src="assets/img/proyects/chat/login.png" class="img-fluid"  alt="notes">
                <img src="assets/img/proyects/chat/register.png" class="img-fluid" alt="notes">
                <img src="assets/img/proyects/chat/emojis.png" class="img-fluid" alt="notes">
                <img src="assets/img/proyects/chat/conversation.png" class="img-fluid" alt="notes">
                <img src="assets/img/proyects/chat/profile.png" class="img-fluid" style="height: 495px" alt="notes">
            </div>
        </div>
        <div class="portfolio-description pt-5 text-justify">
            <div class="card mb-5">
                <div class="card-header">
                    <h3>Descripción</h3>
                </div>
                <div class="card-body p-5">
                    <p class="card-text">Esta web permite la comunicación asíncrona e instantánea con distintas personas, ofreciendo una experiencia agradable al usuario, la cual permite también gestionar la información del perfil del mismo. </p>

                    <h5>Tecnologías</h5>
                    <ul>
                        <li>
                            <p>Laravel</p>
                        </li>
                        <li>
                            <p>Vue JS</p>
                        </li>
                        <li>
                            <p>Pusher</p>
                        </li>
                        <li>
                            <p>Bootstrap</p>
                        </li>
                    </ul>
                    <h5>Información </h5>
                    <ul>
                        <li>
                            <p>Diseño responsivo: Si</p>
                        </li>
                        <li>
                            <p><strong>URL de GitHub</strong>: <a href="https://github.com/JovaniMR/app_notes"
                                    target="_blank" style="color: blue">https://github.com/JovaniMR/app_notes</a></p>

                        </li>
                        <li>
                            <p><strong>URL del proyecto</strong>: <a href="https://hidden-thicket-79401.herokuapp.com"
                                    target="_blank" style="color: blue">https://hidden-thicket-79401.herokuapp.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</section><!-- End Portfolio Details Section -->



@endsection
