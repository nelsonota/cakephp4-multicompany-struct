<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\JourJournal $jourJournal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Jour Journal'), ['action' => 'edit', $jourJournal->jour_codigo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Jour Journal'), ['action' => 'delete', $jourJournal->jour_codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $jourJournal->jour_codigo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Jour Journal'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Jour Journal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jourJournal view content">
            <h3><?= h($jourJournal->jour_codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Jour Model') ?></th>
                    <td><?= h($jourJournal->jour_model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jour Json Data') ?></th>
                    <td><?= h($jourJournal->jour_json_data) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jour Codigo') ?></th>
                    <td><?= $this->Number->format($jourJournal->jour_codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jour Model Codigo') ?></th>
                    <td><?= $this->Number->format($jourJournal->jour_model_codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jour Usua Codigo') ?></th>
                    <td><?= $this->Number->format($jourJournal->jour_usua_codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jour Empr Codigo') ?></th>
                    <td><?= $this->Number->format($jourJournal->jour_empr_codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jour Created') ?></th>
                    <td><?= h($jourJournal->jour_created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
