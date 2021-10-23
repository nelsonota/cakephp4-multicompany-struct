<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JdetJournalDetail $jdetJournalDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Jdet Journal Detail'), ['action' => 'edit', $jdetJournalDetail->jdet_codigo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Jdet Journal Detail'), ['action' => 'delete', $jdetJournalDetail->jdet_codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $jdetJournalDetail->jdet_codigo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Jdet Journal Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Jdet Journal Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jdetJournalDetail view content">
            <h3><?= h($jdetJournalDetail->jdet_codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Jdet Property') ?></th>
                    <td><?= h($jdetJournalDetail->jdet_property) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jdet Prop Key') ?></th>
                    <td><?= h($jdetJournalDetail->jdet_prop_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jdet Codigo') ?></th>
                    <td><?= $this->Number->format($jdetJournalDetail->jdet_codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jdet Jour Codigo') ?></th>
                    <td><?= $this->Number->format($jdetJournalDetail->jdet_jour_codigo) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Jdet Old Value') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($jdetJournalDetail->jdet_old_value)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Jdet Value') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($jdetJournalDetail->jdet_value)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
