

<div class="text-center" style="padding:50px 0">
	<div class="logo">Iniciar sesión</div>
	<!-- Main Form -->
	<div class="login-form-1">
	    <?= $this->Flash->render('auth') ?>
	    <?= $this->Form->create() ?>
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<?= $this->Form->input('username', ['class' => 'form-control', 'placeholder' => 'Nombre de usuario',
						'label' => false, 'required']) ?>
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<?= $this->Form->input('contrasena', ['class' => 'form-control', 'placeholder' => 'Contraseña',
						'label' => false, 'required']) ?>
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">remember</label>
					</div>
				</div>
				<?= $this->Form->button('>', ['class' => ['login-button', 'fa fa-chevron-right']]) ?>
			</div>
			<div class="etc-login-form">
				<p>forgot your password? <a href="#">click here</a></p>
				<?= $this->Html->link('Registrarse', ['controller' => 'Usuarios', 'action' => 'add']) ?>
			</div>
		<?= $this->Form->end() ?>
	</div>