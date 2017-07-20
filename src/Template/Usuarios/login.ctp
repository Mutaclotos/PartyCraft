
<div class="container clearfix"> 
	<div class="text-center" style="padding:50px 0">
		
		<!-- Main Form -->
		<div class="col-sm-1 col-sm-offset-1">

		</div>
		
	<div class="col-sm-6 col-sm-offset-1">
		<h2>Iniciar sesión</h2>	
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
							<div class="form-group password">
								<label for="lg_password" class="sr-only">Password</label>
								<?= $this->Form->input('contrasena', ['class' => 'form-control','type' => 'password', 'placeholder' => 'Contraseña',
								'label' => false, 'required']) ?>
							</div>
							<div class="form-group login-group-checkbox">
								<input type="checkbox" id="lg_remember" name="lg_remember">
								<label for="lg_remember">Recordar Usuario</label>
							</div>
						</div>
						<?= $this->Form->button('', ['class' => ['login-button', 'fa fa-sign-in']]) ?>
					</div>
					<!--<div class="etc-login-form">
						<p>forgot your password? <a href="#">click here</a></p>
						<?= $this->Html->link('Registrarse', ['controller' => 'Usuarios', 'action' => 'add']) ?>
					</div>-->
				<?= $this->Form->end() ?>
			</div>
		</div>
		
		
		<div class="col-sm-10 col-sm-offset-1 ">
			<h2>¿No tienes cuenta? Crea una.</h2>	
			 <button type="submit" name="submit" class="btn btn-lg" required="required"><?= $this->Html->link('Registrarse', ['controller' => 'Usuarios', 'action' => 'add']) ?></button>
			 
		

		</div>
	</div>
</div>