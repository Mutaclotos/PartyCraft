<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>
        </title>
        
        
    </head>
    <body class="home">
     <section id="main-slider" class="carousel slide">
            <div class="carousel slide" data-ride="carousel" >
                <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                    
                </ol>
                <div class="carousel-inner">
    
                    <div class="item active" style="background-image: url('../img/if1.jpg')">
                        <div class="container">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h1 class="animation animated-item-1">¡Bienvenido a PartyCraft!</h1>
                                        <h2 class="animation animated-item-2">La página ideal para planear todos tus eventos</h2>
                                        <a> <?= $this->Html->link('Crea tu evento', ['controller' => 'Proveedores', 'action' => 'adsearch'], ['class' => 'btn-slide animation animated-item-3']) ?></a>
                                    </div>
                                </div>
    
                                <div class="col-sm-6 hidden-xs animation animated-item-4">
                                    <div class="slider-img">
                                        <img class="img-responsive">
                                        
                                        <?= $this->Html->image('../img/e1.png'); ?>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div><!--/.item-->
    
                    <div class="item" style="background-image: url('../img/bg2.jpg')">
                        <div class="container">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h1 class="animation animated-item-1">Conviértete en tu propio organizador de eventos especiales</h1>
                                        <h2 class="animation animated-item-2">Crea el evento perfecto, para cualquier ocasión</h2>
                                        <a> <?= $this->Html->link('Crea tu evento', ['controller' => 'Proveedores', 'action' => 'adsearch'], ['class' => 'btn-slide animation animated-item-3']) ?></a>
                                    </div>
                                </div>
    
                                <div class="col-sm-6 hidden-xs animation animated-item-4">
                                    <div class="slider-img">
                                        <img class="img-responsive" <?= $this->Html->image('../img/img1.png'); ?>>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div><!--/.item-->
    
                </div><!--/.carousel-inner-->
            </div><!--/.carousel-->
            
    <!-- FIN CARRUSEL -->  
            
            <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
                
            </a>
            <a class="next hidden-xs" href="#main-slider" data-slide="next">
                <i class="fa fa-chevron-right"></i>
                
            </a>
        </section><!--/#main-slider-->
    
        <section id="feature" >
            <div class="container">
               <div class="center wow fadeInDown">
                    <h2>Utilidades en Eventos:</h2>
                    <p class="lead">Partycraft es la opción más conveniente para cualquier evento que quieras organizar.</p>
                </div>
    
                <div class="row">
                    <div class="features">
                        <div class="col-md-4 col-sm-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-gift"></i>
                                <h2>Cumpleaños</h2>
                                <h3>Porque el mejor regalo podría ser una fiesta increible.</h3>
                            </div>
                        </div><!--/.col-md-4-->
    
                        <div class="col-md-4 col-sm-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-file"></i>
                                <h2>Corporativos</h2>
                                <h3>Haz que todos se diviertan en un ambiente laboral.</h3>
                            </div>
                        </div><!--/.col-md-4-->
    
                        <div class="col-md-4 col-sm-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-users"></i>
                                <h2>Deportivos</h2>
                                <h3>Las carreras pueden ser aún más divertidas.</h3>
                            </div>
                        </div><!--/.col-md-4-->
                    
                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-cutlery"></i>
                                <h2>Culinarios</h2>
                                <h3>Porque la comida no siempre lo es todo.</h3>
                            </div>
                        </div><!--/.col-md-4-->
    
                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-book"></i>
                                <h2>Estudiantiles</h2>
                                <h3>Donde la educación es primordial.</h3>
                            </div>
                        </div><!--/.col-md-4-->
    
                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-heart"></i>
                                <h2>Bodas</h2>
                                <h3>El amor está en el aire, haz tus sueños realidad.</h3>
                            </div>
                        </div><!--/.col-md-4-->
                    </div><!--/.services-->
                </div><!--/.row-->    
            </div><!--/.container-->
        </section><!--/#feature-->
        
        <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Servicios y Ventajas</h2>
                <p class="lead">Te queremos facilitar la organización de tus eventos, por eso te recordamos que:</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive">
                            <?= $this->Html->image('../img/services1.png'); ?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Rankings</h3>
                            <p>Puedes ver los mejores proveedores del mercado.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive">
                            <?= $this->Html->image('../img/services2.png'); ?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Rápido</h3>
                            <p>Tienes todo a la mano, para que puedas ahorrar tiempo</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive">
                            <?= $this->Html->image('../img/services3.png'); ?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Práctico</h3>
                            <p>Solo escoge las opciones que necesitas</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" >
                            <?= $this->Html->image('../img/services4.png'); ?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Ideas</h3>
                            <p>Explora las categorias y encontrarás nuevas opciones</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive">
                            <?= $this->Html->image('../img/services5.png'); ?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Desde tu teléfono</h3>
                            <p>Donde sea y cuando sea, todo por tu comodidad</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive">
                            <?= $this->Html->image('../img/services6.png'); ?>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Te salvamos</h3>
                            <p>Encuentra al proveedor que has estado buscando</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    
    
        <section id="conatcat-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="pull-left">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h2>¿Tienes preguntas?</h2>
                                <p>Si tienes problemas o alguna sugerencia para mejorar, llámanos al (506)-2525-4141</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->    
        </section><!--/#conatcat-info-->

    
    </body>
</html>
