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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tabla1->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tabla1->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tabla1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tabla1 form content">
            <?= $this->Form->create($tabla1) ?>
            <fieldset>
                <legend><?= __('Edit Tabla1') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
