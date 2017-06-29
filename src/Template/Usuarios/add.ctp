<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Comentarios'), ['controller' => 'Comentarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comentario'), ['controller' => 'Comentarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Favoritos'), ['controller' => 'Favoritos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Favorito'), ['controller' => 'Favoritos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Agregar Usuario') ?></legend>
        <?php
            echo $this->Form->input('username', ['label' => 'Nombre de usuario']);
            echo $this->Form->input('correo', ['type'=>'email' ,'label' => 'Correo electrónico']);
            echo $this->Form->input('nombreReal', ['label' => 'Nombre']);
            echo $this->Form->input('contrasena', ['type'=>'password' , 'label' => 'Contraseña']);
            echo $this->Form->input('telefono', ['type'=>'tel' ,'label' => 'Teléfono']);
            echo $this->Form->input('fotoPerfil', ['label' => 'Foto de perfil']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Registrarse')) ?>
    <?= $this->Form->end() ?>
</div>
