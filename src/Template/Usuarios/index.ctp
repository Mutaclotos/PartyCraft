<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Usuarios</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('username', ['Nombre de usuario']) ?></th>
                        <th><?= $this->Paginator->sort('correo', ['Correo electrónico']) ?></th>
                        <th><?= $this->Paginator->sort('nombreReal', ['Nombre']) ?></th>
                        <th><?= $this->Paginator->sort('telefono', ['Teléfono']) ?></th>
                        <th><?= $this->Paginator->sort('fotoPerfil', ['Foto de perfil']) ?></th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= h($usuario->id) ?></td>
                        <td><?= h($usuario->username) ?></td>
                        <td><?= h($usuario->correo) ?></td>
                        <td><?= h($usuario->nombreReal) ?></td>
                        <td><?= h($usuario->telefono) ?></td>
                        <td><?= h($usuario->fotoPerfil) ?></td>
                        <td>
                            <?= $this->Html->link('Ver', ['action' => 'view', $usuario->id], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $usuario->id], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $usuario->id], ['confirm' => 
                            'Está seguro que desea eliminar a ' . $usuario->username . '?', 'class' => 'btn btn-sm btn-danger']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('Primero')) ?>
                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
                <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
    </div>
</div>