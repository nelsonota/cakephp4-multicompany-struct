<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClieCliente $clieCliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Clie Cliente'), ['action' => 'edit', $clieCliente->clie_codigo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Clie Cliente'), ['action' => 'delete', $clieCliente->clie_codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $clieCliente->clie_codigo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clie Cliente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Clie Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clieCliente view content">
            <h3><?= h($clieCliente->clie_codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Clie Documento') ?></th>
                    <td><?= h($clieCliente->clie_documento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clie Razao Social') ?></th>
                    <td><?= h($clieCliente->clie_razao_social) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clie Token') ?></th>
                    <td><?= h($clieCliente->clie_token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clie Codigo') ?></th>
                    <td><?= $this->Number->format($clieCliente->clie_codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clie Created') ?></th>
                    <td><?= h($clieCliente->clie_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clie Modified') ?></th>
                    <td><?= h($clieCliente->clie_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clie Deleted') ?></th>
                    <td><?= h($clieCliente->clie_deleted) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
