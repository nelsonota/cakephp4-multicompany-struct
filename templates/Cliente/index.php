<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClieCliente[]|\Cake\Collection\CollectionInterface $clieCliente
 */
?>
<div class="clieCliente index content">
    <?= $this->Html->link(__('New Clie Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clie Cliente') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('clie_codigo') ?></th>
                    <th><?= $this->Paginator->sort('clie_documento') ?></th>
                    <th><?= $this->Paginator->sort('clie_razao_social') ?></th>
                    <th><?= $this->Paginator->sort('clie_token') ?></th>
                    <th><?= $this->Paginator->sort('clie_created') ?></th>
                    <th><?= $this->Paginator->sort('clie_modified') ?></th>
                    <th><?= $this->Paginator->sort('clie_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clieCliente as $clieCliente): ?>
                <tr>
                    <td><?= $this->Number->format($clieCliente->clie_codigo) ?></td>
                    <td><?= h($clieCliente->clie_documento) ?></td>
                    <td><?= h($clieCliente->clie_razao_social) ?></td>
                    <td><?= h($clieCliente->clie_token) ?></td>
                    <td><?= h($clieCliente->clie_created) ?></td>
                    <td><?= h($clieCliente->clie_modified) ?></td>
                    <td><?= h($clieCliente->clie_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $clieCliente->clie_codigo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clieCliente->clie_codigo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clieCliente->clie_codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $clieCliente->clie_codigo)]) ?>
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
