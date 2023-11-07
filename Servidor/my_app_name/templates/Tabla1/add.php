<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tabla1 $tabla1
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tabla1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tabla1 form content">
            <?= $this->Form->create($tabla1) ?>
            <fieldset>
                <legend><?= __('Add Tabla1') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
