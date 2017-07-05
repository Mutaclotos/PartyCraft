<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Mi perfil</h2>
        </div>
        <?= $this->Form->create($usuario) ?>
        <fieldset>
            <?php
                echo $this->Form->input('username', ['label' => 'Nombre de usuario']);
                echo $this->Form->input('correo', ['type'=>'email' ,'label' => 'Correo electrónico']);
                echo $this->Form->input('nombreReal', ['label' => 'Nombre']);
                echo $this->Form->input('contrasena', ['type'=>'password' , 'label' => 'Contraseña', 'value' => '']);
                echo $this->Form->input('telefono', ['label' => 'Teléfono']);
                echo $this->Form->input('fotoPerfil', ['label' => 'Foto de perfil']);
            ?>
        </fieldset>
        <?= $this->Form->button('Editar perfil') ?>
        <?= $this->Form->end() ?>
    </div>
</div>
