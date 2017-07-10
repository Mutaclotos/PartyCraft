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

$cakeDescription = 'CakePHP: the rapid development php framework';
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
    
        <?= $this->Html->meta('icon') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        
        <header id="header">
            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"  <?= $this->Html->link('PartyCraft', ['controller' => 'Pages', 'action' => 'home'], ['class' => 'navbar-brand']) ?>>
                            <img src="images/logo.png" alt="logo"></a>
                    </div>
    				
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="active"><?= $this->Html->link('Inicio', ['controller' => 'Pages', 'action' => 'home']) ?></li>
                            <li><?= $this->Html->link('Ver usuarios', ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
                            <li><a href="">Services</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-item.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <?php if(isset($current_user)): ?>
                                <li>
                                    <?= $this->Html->link('Mis favoritos', ['controller' => 'Favoritos', 'action' => 'index']) ?>
                                </li>
                                
                                <li><?= $this->Html->link('Salir', ['controller' => 'Usuarios', 'action' => 'logout']) ?></li>
                            <?php else: ?>

                                <li> <?= $this->Html->link('Iniciar Sesión', ['controller' => 'Usuarios', 'action' => 'login']) ?></li>  
                                <li><?= $this->Html->link('Registrarse', ['controller' => 'Usuarios', 'action' => 'add']) ?></li>

                            <?php endif; ?>
                        </ul>
                    </div>
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
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
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
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
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
