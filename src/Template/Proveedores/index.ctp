<script type="text/javascript" src="ajax.js"></script>
<div class="container clearfix"> 
    <div class="container">
        <div class="row">
            <h2>Categorias</h2> 
			<div class="tab-wrap">
				<div class="media">
					<div class="sidebar-nav">
						<div class="parrent pull-left">
							<ul class="nav nav-tabs nav-stacked">
								<!--<li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>
								<li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>-->
								 <?php foreach ($categorias as $categoria): ?>
								<!--<li><?//= $this->Html->link($categoria->nombreCategoria, ['controller' => 'Categorias', 'action' => 'view', $categoria->id]) ?></li>-->
								<li><?= $this->Html->link($categoria->nombreCategoria, ['data-ajax-url'
																									=> $this->Url->build([
																									'controller'=>'Proveedores',
																									'action'=>'sortByCategory',
																									'_ext' => 'json', $categoria->id]) 
																									]) ?></li>
								<?php endforeach ?>
		
							</ul>
						</div>
					  </div>
					<div class="parrent media-body">
						<div class="tab-content">
						  <h4>Ordenar por: </h4>
						  <?= $this->Paginator->sort('nombre', ['Nombre']) ?>
						  <?= $this->Paginator->sort('puntajeGlobal', ['Puntaje'], ['direction' => 'desc']) ?>
							<ul class="list-group">
							<?php foreach ($proveedores as $proveedor): ?>
								<div class="tab-pane">
									<div class="media">
										<div class="media-body">
											 <li class="list-group-item">
												<h4 class="list-group-item-heading"><?= h($proveedor->nombre) ?></h4>
													<?= $this->Html->image($proveedor->logo); ?>
												<h3 class="list-group-item-heading"><?= h($proveedor->puntajeGlobal) ?></h3>
													<p class="list-group-item-text">
													<?= h($proveedor->descripcion) ?></p>
												<p class="list-group-item-text">
													<?= h($proveedor->ubicacion) ?></p>
												<br>
												<?= $this->Html->link('Ver más', ['controller' => 'Proveedores', 'action' => 'view', $proveedor->id], ['class' => 'btn btn-sm btn-primary']) ?>
												</br>
											</li>
										</div>
									</div>
								</div>															
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
						</div> <!--/.tab-content-->  
					</div> <!--/.media-body--> 
				</div> <!--/.media-->     
			</div><!--/.tab-wrap-->               
	   </div><!--/.row-->
    </div><!--/.container-->
</div>