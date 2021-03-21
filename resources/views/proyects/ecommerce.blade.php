@extends('app')

@section('content')

@include('layouts.short-navbar') 

<div class="intro intro-single route bg-image" style="background-image: url(assets/img/proyects/notes/1.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Tienda online de suplementos alimenticios</h2 >
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="#">Proyectos</a>
                    </li>
                    <li class="breadcrumb-item active">Tienda online</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- ======= Portfolio Details Section ======= -->
<section class="portfolio-details">
    <div class="container">
        <div class="row mt-3 mb-4">
            <div class="col">
                <h2 class=" title-a " style="font-size: 30px">Usuario (comprador)</h2>
            </div>
        </div>
        <div class="portfolio-details-container">
            <div class="owl-carousel portfolio-details-carousel">
                <img src="assets/img/proyects/ecommerce/1.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/2.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/3.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/4.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/5.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/6.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/7.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/8.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/9.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/10.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/11.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/12.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/13.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/14.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/15.png" class="img-fluid" alt="tienda">

        </div>
        <div class="row mt-5 mb-4">
            <div class="col">
                <h2 class=" title-a " style="font-size: 30px">Administrador (vendedor)</h2>
            </div>
        </div>
        <div class="portfolio-details-container">
            <div class="owl-carousel portfolio-details-carousel">
                <img src="assets/img/proyects/ecommerce/01.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/02.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/03.png" class="img-fluid" alt="tienda">
                <img src="assets/img/proyects/ecommerce/04.png" class="img-fluid" alt="tienda">
            </div>

        </div>

        <div class="portfolio-description pt-5 text-justify">
            <div class="card mb-5">
                <div class="card-header">
                    <h3>Descripción</h3>
                </div>
                <div class="card-body p-5">
                    <p class="card-text">Tienda online de venta de suplementos alimenticios, la cual permite de lado del 
                        cliente, visualizar y comprar una variedad de productos, así como ver los pedidos que ha realizado y su
                        carrito de compra.
                        Por parte del vendedor permite gestionar productos y visualizar los pedidos realizados así como cambiar 
                        el status del envio de los pedidos.
                        La tienda online permite realizar la compra mediante la pasarela de pagos de paypal.
                    </p>

                    <h5>Tecnologías</h5>
                    <ul>
                        <li>
                            <p>Laravel</p>
                        </li>
                        <li>
                            <p>Bootstrap</p>
                        </li>
                        <li>
                            <p>Api Paypal</p>
                        </li>
                    </ul>
                    <h5>Información </h5>
                    <ul>
                        <li>
                            <p>Diseño responsivo: No</p>
                        </li>
                        <li>
                            <p><strong>URL de GitHub</strong>: <a href="https://github.com/JovaniMR/nutrition_store"
                                    target="_blank" style="color: blue">https://github.com/JovaniMR/nutrition_store</a></p>

                        </li>
                        <li>
                            <p>
                                <strong>URL del proyecto</strong>: <a href="http://nutritionstore.herokuapp.com/"
                                    target="_blank" style="color: blue">http://nutritionstore.herokuapp.com</a>
                            </p>
                                    <ul>
                                        <li>
                                            <h6>Datos de pruebas</h6>

                                            <li>
                                            <p>Admin (vendedor)</p>
                                            </li>    
                                                <p>- correo: admin@gmail.com</p>
                                                <p>- contraseña: admin</p>

                                            <li>
                                                <p>Usuario (Comprador)</p>
                                            </li> 
                                                <p>- correo: user@gmail.com</p>
                                                <p>- contraseña: user</p>
                                        </li>
                                            
                                         
                                        <li> 
                                            <h6>Datos de pruebas de pago</h6>
                                        </li>
                                                <p>- correo: sb-nu2ms4835853@personal.example.com</p>
                                                <p>- contraseña: Y@]l9#sS</p>
                                    </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</section><!-- End Portfolio Details Section -->



@endsection
