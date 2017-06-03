<?php $__env->startSection('content'); ?>

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
 
	



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>