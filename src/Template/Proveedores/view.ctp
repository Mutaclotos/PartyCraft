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
									<!--<//?= $this->Form->postLink('Agregar a favoritos', ['controller' => 'Favoritos', 'action' => 'add', $proveedor->id], ['confirm' => '¿Agregar favorito?', 'class' => 'btn btn-sm btn-info']) ?>-->
									 <div class="center wow fadeInDown animated form-group"  >
									<button type="submit" class="btn btn-success btn-lg" required="required"><a onclick="setFavorito(<?= $proveedor->id ?>);">Agregar a favoritos</a></button>
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
	                    <div class="col-sm-5 text-center">
	                        <div class="gmap">
	                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
	                        </div>
	                    </div>
	
	                    <div class="col-sm-7 map-content">
	                        <ul class="row">
	                            <li class="col-sm-6">
	                                <address>
	                                    <h5>Contacto</h5>
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
                                <p>Si utilizaste los servicios de este proveedor, vamos comenta como te fué</p>
                            </div> 
      
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label>Nombre de Usuario *</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                                         
                                        <div class="form-group">
                                            <label>Mensaje *</label>
                                            <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
                                        </div>                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                                        </div>
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
	                                <?php if(intval($comentario->puntaje) == 1): ?>
    	    							<?= $this->Html->image('../img/1_stars.png'); ?>
						    	    <?php elseif(intval( $comentario->puntaje) == 2): ?>
						    	    	<?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?>
						    	    <?php elseif(intval($comentario->puntaje) == 3): ?>
						    	    	<?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?>
						    	    <?php elseif(intval($comentario->puntaje) == 4): ?>
						    	    	<?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?>
						    	    <?php else: ?>
						    	    	<?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?><?= $this->Html->image('../img/1_stars.png'); ?>
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


