<div class="row">
    <div class="col-md-12">
    	<div class="page-header">
    		<h2>
    			Mis favoritos
    			
    		</h2>
    	</div>
		<ul class="list-group">
			<?php foreach ($favoritos as $favorito): ?>
			<li class="list-group-item">
				<h2 class="list-group-item-heading"><?= h($favorito->Proveedores->nombre) ?></h2>
				<h3 class="list-group-item-heading"><?= h($favorito->Proveedores->puntajeGlobal) ?></h3>
				<p class="list-group-item-text">
					<?= h($favorito->Proveedores->descripcion) ?>
                </p>
                <p class="list-group-item-text">
					<?= h($favorito->Proveedores->ubicacion) ?>
                </p>
				<br>
				<?= $this->Form->postLink('Eliminar', ['controller' => 'Favoritos', 'action' => 'delete', $favorito->Proveedores->id], ['confirm' => '¿Eliminar favorito?', 'class' => 'btn btn-sm btn-danger']) ?>
				</br>
				<?= $this->Html->image($favorito->Proveedores->logo); ?>
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