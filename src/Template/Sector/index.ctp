
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
                <th><?= $this->Paginator->sort('nombre', ['Nombre']) ?></th>
                <th>Acciones</th>
    		</tr>
    		</thead>
    		<tbody>
    		<?php foreach ($sector as $sec): ?>
    		<tr>
                <td><?= $this->Number->format($sec->id) ?></td>
                <td><?= h($sec->nombre) ?></td>
                <td>
                    <?= $this->Html->link('Ver', ['action' => 'view', $sec->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $sec->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $sec->id], ['confirm' => 'Eliminar usuario ?', 'class' => 'btn btn-sm btn-danger']) ?>
                </td>
    		</tr>
    	<?php endforeach; ?>
    		</tbody>
    		</table>
    	</div>

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