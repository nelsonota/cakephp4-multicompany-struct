<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JourJournal[]|\Cake\Collection\CollectionInterface $jourJournal
 */
?>
<div class="jourJournal index content">
    <?= $this->Html->link(__('New Jour Journal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Jour Journal') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('jour_codigo') ?></th>
                    <th><?= $this->Paginator->sort('jour_model') ?></th>
                    <th><?= $this->Paginator->sort('jour_model_codigo') ?></th>
                    <th><?= $this->Paginator->sort('jour_json_data') ?></th>
                    <th><?= $this->Paginator->sort('jour_created') ?></th>
                    <th><?= $this->Paginator->sort('jour_usua_codigo') ?></th>
                    <th><?= $this->Paginator->sort('jour_empr_codigo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jourJournal as $jourJournal): ?>
                <tr>
                    <td><?= $this->Number->format($jourJournal->jour_codigo) ?></td>
                    <td><?= h($jourJournal->jour_model) ?></td>
                    <td><?= $this->Number->format($jourJournal->jour_model_codigo) ?></td>
                    <td><?= h($jourJournal->jour_json_data) ?></td>
                    <td><?= h($jourJournal->jour_created) ?></td>
                    <td><?= $this->Number->format($jourJournal->jour_usua_codigo) ?></td>
                    <td><?= $this->Number->format($jourJournal->jour_empr_codigo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $jourJournal->jour_codigo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jourJournal->jour_codigo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jourJournal->jour_codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $jourJournal->jour_codigo)]) ?>
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
