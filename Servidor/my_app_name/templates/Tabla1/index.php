<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tabla1> $tabla1
 */
?>
<div class="tabla1 index content">
    <?= $this->Html->link(__('New Tabla1'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tabla1') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tabla1 as $tabla1): ?>
                <tr>
                    <td><?= $this->Number->format($tabla1->id) ?></td>
                    <td><?= h($tabla1->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tabla1->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tabla1->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tabla1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabla1->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
