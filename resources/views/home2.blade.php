@extends('layouts.master')

@section('content')

    <!-- Header -->
    <a name="about"></a>
    <!-- <div class="intro-header"> -->
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
        <!-- /.container -->

    <!--</div>-->
    <!-- /.intro-header -->

    <!-- Page Content -->
 
	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <h2>¡¡Página en construcción!! Disculpen las molestias</h2><br>
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <h1>Proyectos</h1>
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Web CIFP Majada Marcial</h2>
                    <p class="lead">Web realizada para el proyecto final del módulo <b>Implantación de Aplicaciones Web</b>, montada sobre WordPress. </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <a target="_blank" href="https://javier.ml/proyectos/majadamarcial/">
                        <img class="img-responsive" src="{{ url('assets/bootstrap/img/majada.png') }}" alt="Majada Marcial">
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Proyecto PrestaShop</h2>
                    <p class="lead">Tienda Online usando PrestaShop. </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <a target="_blank" href="https://javier.ml/proyectos/prestashop/">
                        <img class="img-responsive" src="{{ url('assets/bootstrap/img/prestashop.png') }}" alt="PrestaShop">
                    </a>
                </div>
            </div>

        </div>
         <!-- /.container -->

    </div>

    <!-- /.content-section-a -->
 <!--
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2>
                    <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="{{ url('assets/bootstrap/img/dog.png') }}" alt="">
                </div>
            </div>

        </div>
         /.container

    </div>
-->
    <!-- /.content-section-b -->
 <!--
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Google Web Fonts and<br>Font Awesome Icons</h2>
                    <p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="{{ url('assets/bootstrap/img/phones.png') }}" alt="">
                </div>
            </div>

        </div>
      /.container 



    </div>
-->
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Conecta conmigo:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->



@stop