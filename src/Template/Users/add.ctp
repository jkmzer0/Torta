<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Empleados'), ['action' => 'home']) ?></li>
    </ul>
</nav>
<div class="empleados form large-9 medium-8 columns content">
    <?= $this->Form->create($empleado) ?>
    <fieldset>
        <legend><?= __('Add Empleado') ?></legend>
        <?php
            echo $this->Form->control('usuario');
            echo $this->Form->control('password');
            echo $this->Form->control('id_persona');
            echo $this->Form->control('id_tipo_acceso');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
