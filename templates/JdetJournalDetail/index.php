<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JdetJournalDetail[]|\Cake\Collection\CollectionInterface $jdetJournalDetail
 */
?>
<div class="jdetJournalDetail index content">
    <?= $this->Html->link(__('New Jdet Journal Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Jdet Journal Detail') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('jdet_codigo') ?></th>
                    <th><?= $this->Paginator->sort('jdet_jour_codigo') ?></th>
                    <th><?= $this->Paginator->sort('jdet_property') ?></th>
                    <th><?= $this->Paginator->sort('jdet_prop_key') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jdetJournalDetail as $jdetJournalDetail): ?>
                <tr>
                    <td><?= $this->Number->format($jdetJournalDetail->jdet_codigo) ?></td>
                    <td><?= $this->Number->format($jdetJournalDetail->jdet_jour_codigo) ?></td>
                    <td><?= h($jdetJournalDetail->jdet_property) ?></td>
                    <td><?= h($jdetJournalDetail->jdet_prop_key) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $jdetJournalDetail->jdet_codigo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jdetJournalDetail->jdet_codigo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jdetJournalDetail->jdet_codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $jdetJournalDetail->jdet_codigo)]) ?>
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
