<div id="provider-id" class="parrent media-body">
						<div class="tab-content">

					
							<div class="paginator">
	                  		<ul class="pagination">
							  <!--<li><//?= $this->Paginator->sort('nombre', ['Nombre']) ?></li>-->
							  <!--<li><//?= $this->Paginator->sort('puntajeGlobal', ['Puntaje'], ['direction' => 'desc']) ?></li>-->
						  </ul>
						  </div>
							<ul class="list-group">
							<?php foreach ($categoriaProveedores as $proveedor): ?>
							
								<div class="tab-pane">
									<div class="media">
										<div class="media-body">
											 <li class="list-group-item">
											 	 <div class='btn-toolbar pull-right'>
													<?= $this->Html->link('Ver más', ['controller' => 'Proveedores', 'action' => 'view', $proveedor->Proveedores->id], ['class' => 'btn btn-md btn-info']) ?>
												</div>
												<h2 class="list-group-item-heading"><?= h($proveedor->Proveedores->nombre) ?></h2>
													<i class="media-object"><?= $this->Html->image($proveedor->Proveedores->logo); ?></i>
													
		
													<p class="list-group-item-text">
													<?= h($proveedor->Proveedores->descripcion) ?></p>
												<p class="list-group-item-text">
													<?= h($proveedor->Proveedores->ubicacion) ?></p>
												<p class="list-group-item-text">
													
													<ul class="list-inline list-unstyled">
											            <span><i class="fa fa-comment"></i> 2 comentarios</span>
											            <li>|</li>
											            <li>
											            	 <?php if(intval( $proveedor->Proveedores->puntajeGlobal) == 1): ?>
												    	    	<span class="fa fa-star"></span>
												    	    <?php elseif(intval( $proveedor->Proveedores->puntajeGlobal) == 2): ?>
												    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span>
												    	    <?php elseif(intval( $proveedor->Proveedores->puntajeGlobal) == 3): ?>
												    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
												    	    <?php elseif(intval( $proveedor->Proveedores->puntajeGlobal) == 4): ?>
												    	    <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
												    	    <?php else: ?>
												    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
												    	    <?php endif; ?>
											            	
											              
											            </li>
											            <li>|</li>
											            <li>	<?php 
													$contactos = $this->Menu->getContacts($this->name, $proveedor->Proveedores->id);
													
													foreach ($contactos as $contacto): ?>
														<?= h($contacto->descripcion).': '.h($contacto->contacto)  ?></li>
														<li>|</li>
													<?php endforeach ?>	</li>

														</ul>
	
												
												</p>
													
											
										</div>
									</div>
								</div>															
							<?php endforeach ?>
							</ul>
								
							<div class="paginator">
                  				<ul class="pagination">
			                        <li><?= $this->Paginator->prev('< Anterior') ?></li>
			                        <li><?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?></li>
			                        <li><?= $this->Paginator->next('Siguiente >') ?></li>
			                    </ul>
                   			 <p><?= $this->Paginator->counter() ?></p>
                			</div>
						
					</div> <!--/.tab-content-->  
				</div> <!--/.media-body--> 
