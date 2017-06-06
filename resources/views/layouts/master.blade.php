<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Javier Jiménez, Diseñador Web y Administrador de Sistemas Informáticos. Fuerteventura. JavierJG">
    <meta name="author" content="Javier Jiménez García">
    <meta name="keywords" content="JavierJG, Diseño Web Fuerteventura, Administrador Sistemas Informaticos Fuerteventura, Fuerteventura, informatico en Fuerteventura, desarrollo web Fuerteventura, Diseño Web Canarias">

    <link rel="shortcut icon" href="https://javierjg.es/assets/bootstrap/img/favicon.ico" />

    <title>Diseñador web y Administrador de Sistemas Informaticos - JavierJG</title>


    <!-- Bootstrap Core CSS -->
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('/assets/bootstrap/css/landing-page.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('/assets/bootstrap/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    @extends('partials.navbar')
    
    @yield('content')
    
    @extends('partials.footer')

    <!-- jQuery -->
    <script src="{{ url('/assets/bootstrap/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>
