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

$cakeDescription = 'PartyCraft!';

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        
        <!-- core CSS -->
        <?= $this->Html->css(['font-awesome.css', 'stylesheet']) ?>  
        <?= $this->Html->css(['animate.min.css', 'stylesheet']) ?> 
        <?= $this->Html->css(['prettyPhoto.css', 'stylesheet']) ?> 
        <?= $this->Html->css(['main.css', 'stylesheet']) ?> 
        <?= $this->Html->css(['responsive.css', 'stylesheet']) ?> 
        <?= $this->Html->css(['bootstrap.min.css', 'stylesheet']) ?>
        <?= $this->Html->script(['jquery-3.2.1.min', 'bootstrap.min']) ?>
    
        
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <link rel="shortcut icon" href="/favicon.ico" /> 
        
        
    </head>
    
    <body>
        
        <header id="header">
            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <?= $this->Html->image('../img/logo.png'); ?>
                    <div class="navbar-header">
 
                        <a class="navbar-brand"  <?= $this->Html->link('PartyCarft',['controller' => 'Pages', 'action' => 'home'], ['class' => 'navbar-brand']) ?>>
                             
                            
                    </div>
    				<font size = '4'>
                    <div class="collapse navbar-collapse navbar-right text-center" >
                        <ul class="nav navbar-nav">
                            <li class="<?php echo $this->Menu->activeClass('Pages', 'home') ?>">
                                <?= $this->Html->link('Inicio', ['controller' => 'Pages', 'action' => 'home']) ?>
                            </li>
                            <!--<li class="<//?php echo $this->Menu->activeClass('Usuarios', 'index') ?>">
                                <//?= $this->Html->link('Ver usuarios', ['controller' => 'Usuarios', 'action' => 'index']) ?>
                            </li>-->
                            
                            <li class="<?php echo $this->Menu->activeClass('Proveedores', 'search') ?>">
                                <?= $this->Html->link('Crea tu evento', ['controller' => 'Proveedores', 'action' => 'adsearch']) ?>
                            </li>
                            
                            <li class="<?php echo $this->Menu->activeClass('Proveedores', 'index') ?>">
                                <?= $this->Html->link('Ver proveedores', ['controller' => 'Proveedores', 'action' => 'index']) ?>
                            </li>
                            <!--<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-item.html">Blog Single</a></li>
                                </ul>
                            </li>-->
                            <?php if(isset($current_user)): ?>
                                <li class="<?php echo $this->Menu->activeClass('Favoritos', 'index') ?>">
                                    <?= $this->Html->link('Mis favoritos', ['controller' => 'Favoritos', 'action' => 'index']) ?><span class="fa fa-star " style="color:white"></span>
                                </li>
                                
                                <li>
                                    <?= $this->Html->link('Salir', ['controller' => 'Usuarios', 'action' => 'logout']) ?><span class="fa fa-sign-out " style="color:white"></span>
                                </li>
                            <?php else: ?>

                                <li class="<?php echo $this->Menu->activeClass('Usuarios', 'login') ?>"> 
                                    <?= $this->Html->link('Iniciar Sesión', ['controller' => 'Usuarios', 'action' => 'login']) ?><span class="fa fa-sign-in " style="color:white"></span>
                                </li>  
                                <li class="<?php echo $this->Menu->activeClass('Usuarios', 'add') ?>">
                                    <?= $this->Html->link('Registrarse', ['controller' => 'Usuarios', 'action' => 'add']) ?><span class="fa fa-user" style="color:white"></span>
                                </li>

                            <?php endif; ?>
                        </ul>
                    </div>
                    </font>
                </div><!--/.container-->
            </nav><!--/nav-->
    		
        </header><!--/header-->
                 
        
        <?= $this->Flash->render() ?>
        <!--/<div class="container clearfix"> -->
            <?= $this->fetch('content') ?>
        
        <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Nuestra Página</h3>
                        <ul>
                            <li><a>Sobre Nosotros</a></li>
                            <li><a>Contacto</a></li>

                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Profesor</h3>
                        <ul>
                            <li><a>Braulio Solano Rojas</a></li>
                            
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Proyecto</h3>
                        <ul>
                            <li><a>Curso de Aplicaciones Web</a></li>
                            <li><a>CI-2413</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Creadores</h3>
                        <ul>
                            <li><a >Scott Adams Garrido</a></li>
                            <li><a>Jimena Machado Rodríguez</a></li>
                            <li><a >Matías Rodríguez Singer</a></li>
                            
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
        
        <?= $this->Html->script(['jquery.prettyPhoto.js']) ?>
        <?= $this->Html->script(['jquery.isotope.min.js']) ?>
        <?= $this->Html->script(['main.js']) ?>
        <?= $this->Html->script(['wow.min.js']) ?>
    </body>
</html>
