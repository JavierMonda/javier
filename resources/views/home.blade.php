@extends('layouts.master')

@section('content')

<!-- Header -->
<a name="about"></a>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="intro-message" style="text-align: center;">
                <img class="img-responsive img-circle" src="assets/bootstrap/img/perfil.png" />
            </div>
        </div>
        <div class="col-md-8">
            <div class="intro-message" style="text-align: center;">
                <h1>Javier Jiménez</h1>
                <h3>Diseñador Web. Administrador de Sistemas Informáticos.</h3>
                <hr class="intro-divider">    
                <ul class="list-inline intro-social-buttons">
                    <li>
                        <a href="https://www.facebook.com/javierjimenezmonda" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/javiermonda" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/javiermonda" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/javiermonda/" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<!-- Page Content -->
<a name="portfolio"></a>
<div class="container">
    <h2>Portfolio</h2>
    <p class="lead">
        Proyectos y trabajos que he realizado hasta el momento en Diseño Web
    </p>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img class="img-thumbnail" src="{{ url('/assets/bootstrap/img/portfolio/wordpress.png') }}" alt="Proyecto WordPress">
                <div class="caption">
                    <h3>Web con WordPress</h3>
                    <p class="lead text-muted">Esta es una web realizada con WordPress para un centro educativo. Contiene plugin para una red social interna en la web.</p>
                    <p>
                        <a href="{{ url('https://javierjg.es/proyectos/majadamarcial') }}" class="btn btn-default" target="_blank" role="button">Ver</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img class="img-thumbnail" src="{{ url('/assets/bootstrap/img/portfolio/tienda-online.png') }}" alt="Tienda Online Laravel">
                <div class="caption">
                    <h3>Tienda Online con Laravel</h3>
                    <p class="lead text-muted">Ejemplo de Tienda Online con sistema de login y carrito. Realizado en PHP y MySQL como gestor de la Base de Datos, usando el framework Laravel.</p>
                    <p>
                        <a href="https://javierjg.es/proyectos/carrito/" class="btn btn-default" target="_blank" role="button">Ver</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img class="img-thumbnail" src="{{ url('/assets/bootstrap/img/portfolio/tienda-prestashop.png') }}" alt="Tienda Online PrestaShop">
                <div class="caption">
                    <h3>Tienda con PrestaShop</h3>
                    <p class="lead text-muted">En esta ocasión he utilizado el CMD PrestaShop para realizar una Tienda Online.</p>
                    <p>
                        <a href="{{ url('https://javierjg.es/proyectos/prestashop/es/') }}" target="_blank" class="btn btn-default" role="button">Ver</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop