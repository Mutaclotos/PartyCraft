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
			
			<!-- CAROUSEL -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			  	<?php $counter = 0; ?>
			  	<?php foreach ($providerPics as $pic): ?>
				  	<?php if($counter == 0): ?>
					    <li data-target="#myCarousel" data-slide-to=<?= $counter ?> class="active"></li>
					<?php else: ?>
						<li data-target="#myCarousel" data-slide-to=<?= $counter ?>></li>
				    <?php endif; ?>
				    <?php $counter++; ?>
			    <?php endforeach ?>
			  </ol>
			
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			  	<?php $counter = 0; ?>
			  	<?php foreach ($providerPics as $pic): ?>
				  	<?php if($counter == 0): ?>
					    <div class="item active">
					      <?= $this->Html->image($pic->foto); ?>
					      <div class="carousel-caption">
					        <?= h($pic->descripcion) ?>
					      </div>
					    </div>
					<?php else: ?>
					    <div class="item">
					      <?= $this->Html->image($pic->foto); ?>
					      <div class="carousel-caption">
					        <?= h($pic->descripcion) ?>
					      </div>
					    </div>
					<?php endif; ?>
					<?php $counter++; ?>
			    <?php endforeach ?>

			  </div>
			
			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
				
    	<!--AQUI VA LA SECCION DE COMENTARIOS-->
		
        
        
        
    </div>
</div>