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
                        <li> <?= $this->Html->link('Iniciar Sesión', ['controller' => 'Usuarios', 'action' => 'login']) ?></li>  
                        <li><?= $this->Html->link('Crear Sesión', ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link('Salir', ['controller' => 'Usuarios', 'action' => 'logout']) ?></li>
                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    
    
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    
    <?= $this->Html->script(['jquery.prettyPhoto.js']) ?>
    <?= $this->Html->script(['jquery.isotope.min.js']) ?>
    <?= $this->Html->script(['main.js']) ?>
    <?= $this->Html->script(['wow.min.js']) ?>
</body>
</html>
