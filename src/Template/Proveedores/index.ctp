<div class="row">
    <div class="col-sm-2">
        <div class="sidebar-nav">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <span class="visible-xs navbar-brand">Sidebar menu</span>
            </div>
            <div class="navbar-collapse collapse sidebar-navbar-collapse">
              <ul class="nav navbar-nav">
                <?php foreach ($categorias as $categoria): ?>
                <li><?= $this->Html->link($categoria->nombreCategoria, ['controller' => 'Categorias', 'action' => 'view', $categoria->id]) ?></li>
                <?php endforeach ?>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
            <div class="col-sm-10">
            	<div class="page-header">
            		<h2>
            			Proveedores
            		</h2>
            		<h5>Ordenar por: </h5>
            		<ul>
                      <li><?= $this->Html->link('Nombre', ['controller' => 'Proveedores', 'action' => 'sortList', 'nombre']) ?></li>
                      <li><?= $this->Html->link('Puntaje', ['controller' => 'Proveedores', 'action' => 'sortList', 'puntaje']) ?></li>
                    </ul>
            	</div>
        		<ul class="list-group">
        			<?php foreach ($proveedores as $proveedor): ?>
        			<li class="list-group-item">
        				<h4 class="list-group-item-heading"><?= h($proveedor->nombre) ?></h4>
        				<h3 class="list-group-item-heading"><?= h($proveedor->puntajeGlobal) ?></h3>
        				<p class="list-group-item-text">
        					<?= h($proveedor->descripcion) ?>
                        </p>
                        <p class="list-group-item-text">
        					<?= h($proveedor->ubicacion) ?>
                        </p>
        				<br>
        				<?= $this->Html->link('Ver más', ['controller' => 'Proveedores', 'action' => 'view', $proveedor->id], ['class' => 'btn btn-sm btn-primary']) ?>
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
</div>