<!DOCTYPE html>

<div class="container clearfix"> 
<div class="row">
    <div class="col-md-12">
    	<div class="page-header">
    		<h2>
    			Mis favoritos
    			
    		</h2>
    	</div>
		<ul class="list-group">
			<?php $counter = 0; ?>
			<?php foreach ($favoritos as $favorito): ?>
			<div class="tab-pane">
				<div class="media">
					<div class="media-body">
						<li class="list-group-item">
							<div class='btn-toolbar pull-right'>
								<?= $this->Form->postLink('Eliminar', ['controller' => 'Favoritos', 'action' => 'delete', $favoritoid[$counter]->id], ['confirm' => '¿Eliminar favorito?', 'class' => 'btn btn-md btn-danger']) ?>
							
							</div>
							<div class='btn-toolbar pull-right'>
								<?= $this->Html->link('Ver más', ['controller' => 'Proveedores', 'action' => 'view', $favorito->Proveedores->id], ['class' => 'btn btn-md btn-info']) ?>
							</div>
							<h2 class="list-group-item-heading"><?= h($favorito->Proveedores->nombre) ?></h2>
							<?= $this->Html->image($favorito->Proveedores->logo); ?>
							<p class="list-group-item-text">
								<?= h($favorito->Proveedores->descripcion) ?>
			                </p>
			                <p class="list-group-item-text">
								<?= h($favorito->Proveedores->ubicacion) ?>
			                </p>
			                <p class="list-group-item-text">
													
								<ul class="list-inline list-unstyled">
						            <span><i class="fa fa-comment"></i> 2 comentarios</span>
						            <li>|</li>
						            <li>
						            	 <?php if(intval( $favorito->puntajeGlobal) == 1): ?>
							    	    	<span class="fa fa-star"></span>
							    	    <?php elseif(intval( $favorito->puntajeGlobal) == 2): ?>
							    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span>
							    	    <?php elseif(intval( $favorito->puntajeGlobal) == 3): ?>
							    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
							    	    <?php elseif(intval( $favorito->puntajeGlobal) == 4): ?>
							    	    <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
							    	    <?php else: ?>
							    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
							    	    <?php endif; ?>
						            	
						              
						            </li>
						            <li>|</li>
						            <li>
						                <?php 
											$contactos = $this->Menu->getContacts($this->name, $favorito->Proveedores->id);
											
											foreach ($contactos as $contacto): ?>
												<?= h($contacto->descripcion).': '.h($contacto->contacto)  ?>
									</li>
									<li>|</li>
										<?php endforeach ?>	
									</li>
								</ul>
							</p>
						
							<?php $counter++; ?>
							</br>
							
						</li>
						<?php endforeach ?>
					</ul>
			        <div class="paginator">
			            <ul class="pagination">
			                <?= $this->Paginator->prev('< Anterior') ?>
			                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
			                <?= $this->Paginator->next('Siguiente >') ?>
			            </ul>
			            <p><?= $this->Paginator->counter() ?></p>
			        </div>
			    </div>
			</div>
			</div>