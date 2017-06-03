<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Javier Jiménez, diseñador web">
    <meta name="author" content="Javier Jiménez García">

    <title>Javier Jiménez</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(url('/assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="<?php echo e(url('/assets/bootstrap/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    
    <!-- Custom CSS -->
    <link href="<?php echo e(url('/assets/bootstrap/css/landing-page.css')); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    
    
    <?php echo $__env->yieldContent('content'); ?>
    
    

    <!-- jQuery -->
    <script src="<?php echo e(url('/assets/bootstrap/js/jquery.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(url('/assets/bootstrap/js/bootstrap.min.js')); ?>"></script>

</body>

</html>

<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partials.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>