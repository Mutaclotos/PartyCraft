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
				<!--<h4 class="list-group-item-heading"><?= h($favorito->nombreUsuario) ?></h4>-->
				<p class="list-group-item-text">
					<?= h($favorito->idProveedor) ?>
                </p>
				<br>
				<?= $this->Html->link('Editar', ['controller' => 'Favoritos', 'action' => 'edit', $favorito->id], ['class' => 'btn btn-sm btn-primary']) ?>
				<?= $this->Form->postLink('Eliminar', ['controller' => 'Favoritos', 'action' => 'delete', $favorito->id], ['confirm' => 'Eliminar enlace ?', 'class' => 'btn btn-sm btn-danger']) ?>
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