<!DOCTYPE html>

<div class="container clearfix"> 
	<script>
		function setFavorito(id) {
			$.ajax({
                type:"POST",
                url: '<?= $this->Url->build('/Favoritos/add/', true) ?>' + id,
                //dataType: 'categoriaProveedores',
                //async:false,
                success: function(data) {
                	$( '#favorito' ).html(data);
                    //alert('success: ' + JSON.stringify(data));
                },
                error: function (data) {
                    alert('error: ' + JSON.stringify(data));
                }
            });
		}
	</script>
	 <section id="blog" class="container">
        <div class="center">
            <h2 class="list-group-item-heading"><?= h($proveedor->nombre) ?></h2>


            <?php if(intval( $proveedor->puntajeGlobal) == 1): ?>
    	    	<?= $this->Html->image('../img/1_stars.png'); ?>
    	    <?php elseif(intval( $proveedor->puntajeGlobal) == 2): ?>
    	    	<?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?>
    	    <?php elseif(intval( $proveedor->puntajeGlobal) == 3): ?>
    	    	<?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?>
    	    <?php elseif(intval( $proveedor->puntajeGlobal) == 4): ?>
    	    	<?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?>
    	    <?php else: ?>
    	    	<?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?>
    	    <?php endif; ?>
    	    <!--//	<h3 class="list-group-item-heading"><//?= h( $proveedor->puntajeGlobal) ?></h3>-->
    	    	
    	    	<div id="content">
				    <div id="templ" style="overflow:hidden;width:260px">
				    		<!--<a onload="getEstrella(<//?= $proveedor->puntajeGlobal ?>);"></a>-->
				    </div>
				</div>
				    	    	
    		</div>

        <div class="blog">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-item">

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
					  <?php if($counter > 0): ?>
					  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					    <span class="sr-only">Next</span>
					  </a>
					  <?php endif; ?>
					</div>

    		 	</div><!--/.blog-item-->
    		<div class="post-tags">
	    	   <div class="media reply_section">
	                <div class="media-body post_reply_content">
	                    <h3><?= h($proveedor->nombre) ?></h3>
	                    <p class="lead"><?= h($proveedor->descripcion) ?></p>
	                </div>
	                
	                 <div id="favorito">    
			            <?php if(isset($current_user)): ?>
			            	<?php if($numResults == 0): ?>
								<br>
									
									 <div class="center wow fadeInDown animated form-group"  >
									 	<?= $this->Form->postLink('Agregar a favoritos', ['controller' => 'Favoritos', 'action' => 'add', $proveedor->id], ['confirm' => '¿Agregar favorito?', 'class' => 'btn btn-sm btn-info']) ?>
									<!--<button type="submit" class="btn btn-success btn-lg" required="required"><a onclick="setFavorito(<?= $proveedor->id ?>);">Agregar a favoritos</a></button>-->
									</div>
								</br>
							<?php endif; ?>
						<?php endif; ?>
					</div>
	                
	             </div> 
         	</div>
         
         
          <section id="contact-info ">
        
	        <div class="gmap-area"  >
	        	 
	            <div class="container">
	                <div class="row">
	                  
	
	                    <div class="col-sm-7 map-content ">
	                        <ul class="row">
	                            <li class="col-sm-6">
	                                <address>
	                                    <h5>Contacto </h5>
	                                    <?= h($proveedor->ubicacion) ?>
	                                     <?php foreach ($contactos as $contacto): ?>
								            <p class="list-group-item-text">
												<?= h($contacto->descripcion).': '.h($contacto->contacto).'  '  ?>
								            </p>
							            <?php endforeach ?>
	                                </address>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
			</section>  <!--/gmap_area -->

                        <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>
                            <div class="message_heading">
                                <h4>Deja un Comentario</h4>
                                <p>Si utilizaste los servicios de este proveedor, comenta tu experiencia.</p>
                            </div> 
      
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                                <div class="row">
                                    <div class="col-sm-8">
                                        
                                                         
                                        <?= $this->Form->create($comentariosProveedores) ?>
								        <fieldset>
								            <?php
								                echo $this->Form->input('contenido', ['Placeholder' => 'Escribir un comentario...']);
								                echo $this->Form->input('puntaje', ['type'=>'numbers' ,'Placeholder' => 'Dale un puntaje al proveedor']);
								                
								            ?>
								        </fieldset>
								        <?= $this->Form->button('Agregar comentario') ?>
								        <?= $this->Form->end() ?>
                                    </div>
                                </div>
                            </form>     
                        </div><!--/#contact-page-->
                    </div><!--/.col-md-8-->
	
					
					<!--div class="paginator">
	                  		<ul class="pagination">
							  <!--<li><//?= $this->Paginator->sort('nombre', ['Nombre']) ?></li>-->
							  <!--<li><//?= $this->Paginator->sort('puntajeGlobal', ['Puntaje'], ['direction' => 'desc']) ?></li>-->
					<!--	  </ul>
						  </div>
					-->
					
                    <!-- este codigo es para los comentarios -->
                        <h1 id="comments_title">Comentarios</h1>
                        <div class="media comment_section">
                        	<?php $counter = 0; ?>
                        	<?php foreach ($comentariosProveedores as $comentario): ?>
	                            <div class="media-body post_reply_comments">
	                            	<div class="pull-left post_comments">
	                                <a href="#"><img src="images/blog/girl.png" class="img-circle" alt="" /></a>
	                            </div>
	                                <h3><?= h($comentariosUsuarios[$counter]->Usuarios->username) ?></h3>
				            	 <?php if(intval( $comentario->puntaje) == 1): ?>
					    	    	<span class="fa fa-star"></span>
					    	    <?php elseif(intval( $comentario->puntaje) == 2): ?>
					    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span>
					    	    <?php elseif(intval( $comentario->puntaje) == 3): ?>
					    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
					    	    <?php elseif(intval(  $comentario->puntaje) == 4): ?>
					    	    <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
					    	    <?php else: ?>
					    	    	<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
					    	    <?php endif; ?>

	                                <h4><?= h($comentario->fecha) ?></h4>
	                                <p><?= h($comentario->contenido) ?></p>
	                            </div>
	                            <?php $counter++; ?>
	                        <?php endforeach ?>
                        </div> 
						
						<!--
							<div class="paginator">
                  				<ul class="pagination">
			                        <!?= $this->Paginator->prev('< Anterior') ?>
			                        <!?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
			                        <!?= $this->Paginator->next('Siguiente >') ?>
			                    </ul>
                   			 <p><!?= $this->Paginator->counter() ?></p>
						-->

				    </div>
				</div>
	
	
            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->

	

</div>


