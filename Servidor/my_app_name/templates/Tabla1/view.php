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
            <?= $this->Html->link(__('Edit Tabla1'), ['action' => 'edit', $tabla1->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tabla1'), ['action' => 'delete', $tabla1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabla1->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tabla1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tabla1'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tabla1 view content">
            <h3><?= h($tabla1->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($tabla1->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tabla1->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
