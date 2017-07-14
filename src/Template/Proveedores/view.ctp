<div class="row">
    <div class="col-md-12">
    	<div class="page-header">
    		<h2>
    			Ver proveedor
    			
    		</h2>
    	</div>
    	
    	    <h2 class="list-group-item-heading"><?= h($proveedor->nombre) ?></h2>
    	    <?= $this->Html->image($proveedor->logo); ?>
			<h3 class="list-group-item-heading"><?= h($proveedor->puntajeGlobal) ?></h3>
			<p class="list-group-item-text">
					<?= h($proveedor->descripcion) ?>
            </p>
            <p class="list-group-item-text">
				<?= h($proveedor->ubicacion) ?>
            </p>
            <?php if(isset($current_user)): ?>
            	<?php if($numResults == 0): ?>
					<br>
						<?= $this->Form->postLink('Agregar a favoritos', ['controller' => 'Favoritos', 'action' => 'add', $proveedor->id], ['confirm' => '¿Agregar favorito?', 'class' => 'btn btn-sm btn-info']) ?>
					</br>
				<?php endif; ?>
			<?php endif; ?>
			
			<!-- AQUI VA EL CAROUSEL -->
			
				
    	<!--AQUI VA LA SECCION DE COMENTARIOS-->
		
        
        
        
    </div>
</div>