<!DOCTYPE html>

<div class="container clearfix"> 
   <section id="contact-info">
        <div class="center">                
            <h2>Organiza tu propio evento</h2>
            
        </div>
       
    </section > 
 
 
    <section id="contact-page">
        <div class="container">
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        
                         <section id="contact-info">
                            <div class="center">                
                                <p class="lead">Ingresa las características de tu evento para ver los proveedores disponibles...</p>
                            </div>
                           
                        </section > 
                        
                        <div class="form-group">
                          <label>Número de Invitados</label>
                            <input class="form-control" type="number" value="42" id="example-number-input">
                        </div>
                        
                        <div class="form-group col-sm-5">
                              <label for="sel1">Provincia:</label>
                          <select class="form-control" id="sel1">
                            <option>San José</option>
                            <option>Alajuela</option>
                            <option>Cartago</option>
                            <option>Heredia</option>
                            <option>Limón</option>
                            <option>Puntarenas</option>
                            <option>Guanacaste</option>
                          </select>
                        </div> 
                        
                        <div class="form-group col-sm-5">
                              <label for="sel1">Cantón:</label>
                          <select class="form-control" id="sel1">
                            <option>Curridabat</option>
                            <option>Concepción de Tres Ríos</option>
                            <option>Montes de Oca</option>
                            <option>San Pedro</option>
                            <option>Pavas</option>
                            <option>Sabanilla</option>
                            <option>Tres Ríos</option>
                          </select>
                        </div> 
                        
                        
                               

                               
                               
                        <div class="form-group">
                            <label>Días y Horas </label>
                            <input class="form-control" type="text" name="daterange" value="01/01/2017 1:30 PM - 01/01/2017 2:00 PM" />
                             
                            <script type="text/javascript">
                            $(function() {
                                $('input[name="daterange"]').daterangepicker({
                                    timePicker: true,
                                    timePickerIncrement: 30,
                                    locale: {
                                        format: 'MM/DD/YYYY h:mm A'
                                    }
                                });
                            });
                            </script>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Consultar</button>
                        </div>
                    </div>
                     <div class="col-sm-1">
                     </div>
                    
                    <div class="col-sm-3">
                        
                     
                            <div class="center">                
                                <p class="lead">... o busca proveedores por su nombre.</p>
                            </div>
                        
                        <div class="search ">
                    <form role="form">
                    	
                    	<?php
						   echo $this->Form->create('Proveedores',array('url'=>'Proveedores/adsearch'));
						   //echo $this->Form->create('Proveedores');
						   echo $this->Form->input('Buscar proveedor', ['class'=> 'seatch-form','Placeholder' => 'Buscar proveedor por nombre o descripción...']);
						   echo $this->Form->submit('Buscar');

						   echo $this->Form->end();
							?>

            </form>
         </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->

    
    </div>
    
    
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />