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
												<h4 class="list-group-item-heading"><?= h($proveedor->Proveedores->nombre) ?></h4>
													<?= $this->Html->image($proveedor->Proveedores->logo); ?>
												<h3 class="list-group-item-heading"><?= h($proveedor->Proveedores->puntajeGlobal) ?></h3>
													<p class="list-group-item-text">
													<?= h($proveedor->Proveedores->descripcion) ?></p>
												<p class="list-group-item-text">
													<?= h($proveedor->Proveedores->ubicacion) ?></p>
												<p class="list-group-item-text">
													
													<?php 
													$contactos = $this->Menu->getContacts($this->name, $proveedor->Proveedores->id);
													
													foreach ($contactos as $contacto): ?>
														<?= h($contacto->descripcion).': '.h($contacto->contacto)  ?>
														<br>
													<?php endforeach ?>	
												</p>
												<br>
													<?= $this->Html->link('Ver más', ['controller' => 'Proveedores', 'action' => 'view', $proveedor->Proveedores->id], ['class' => 'btn btn-sm btn-primary']) ?>
												</br>
											</li>
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
