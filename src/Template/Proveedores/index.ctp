
	
	<div class="container">
		
		<div class="search ">
            <form role="form">
            	
            	<?php
						   echo $this->Form->create('Proveedores',array('url'=>'Proveedores/search'));
						   echo $this->Form->input('Buscar proveedor', ['Placeholder' => 'Buscar proveedor por nombre o descripción...']);
						   echo $this->Form->submit('Buscar');

						   echo $this->Form->end();
							?>
                    
                    <div id="busqueda" > 
                    	
                    </div>

            </form>
         </div>
		
		
		
                    
	
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
								<script>
									function getCategoria(id) {
										$.ajax({
							                type:"POST",
							                url: '<?= $this->Url->build('/Categorias/view/', true) ?>' + id,
							                //dataType: 'categoriaProveedores',
							                //async:false,
							                success: function(data) {
							                	$( '#provider-id' ).replaceWith(data);
							                    //alert('success: ' + JSON.stringify(data));
							                },
							                error: function (data) {
							                    alert('error: ' + JSON.stringify(data));
							                }
							            });
									}
								</script>
								 <?php foreach ($categorias as $categoria): ?>
									<li><a onclick="getCategoria(<?= $categoria->id ?>);"><?= $categoria->nombreCategoria ?></a></li>
								<?php endforeach ?>
		
							</ul>
						</div>
					  </div>
					<div id="provider-id" class="parrent media-body">
						<div class="tab-content">
						  <h4>Ordenar por: </h4>
						  <div class="paginator">
                  				<ul class="pagination">
						  <li><?= $this->Paginator->sort('nombre', ['Nombre']) ?></li>
						  <li><?= $this->Paginator->sort('puntajeGlobal', ['Puntaje'], ['direction' => 'desc']) ?></li>
						  </ul>
						  </div>
							<ul class="list-group">
							<?php foreach ($proveedores as $proveedor): ?>
							
								<div class="tab-pane">
									<div class="media">
										<div class="media-body">
											 <li class="list-group-item">
											 	 <div class='btn-toolbar pull-right'>
													<?= $this->Html->link('Ver más', ['controller' => 'Proveedores', 'action' => 'view', $proveedor->id], ['class' => 'btn btn-md btn-info']) ?>
												</div>
												<h2 class="list-group-item-heading"><?= h($proveedor->nombre) ?></h2>
													<i class="media-object"><?= $this->Html->image($proveedor->logo); ?></i>
													
		
													<p class="list-group-item-text">
													<?= h($proveedor->descripcion) ?></p>
												<p class="list-group-item-text">
													<?= h($proveedor->ubicacion) ?></p>
												<p class="list-group-item-text">
													
													<ul class="list-inline list-unstyled">
											            <span><i class="fa fa-comment"></i> 2 comentarios</span>
											            <li>|</li>
											            <li>
											            	 <?php if(intval( $proveedor->puntajeGlobal) == 1): ?>
												    	    	<span class="fa fa-star"></span>
												    	    <?php elseif(intval( $proveedor->puntajeGlobal) == 2): ?>
												    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span>
												    	    <?php elseif(intval( $proveedor->puntajeGlobal) == 3): ?>
												    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
												    	    <?php elseif(intval( $proveedor->puntajeGlobal) == 4): ?>
												    	    <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
												    	    <?php else: ?>
												    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
												    	    <?php endif; ?>
											            	
											              
											            </li>
											            <li>|</li>
											            <li>	<?php 
													$contactos = $this->Menu->getContacts($this->name, $proveedor->id);
													
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
