<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsuaUsuario[]|\Cake\Collection\CollectionInterface $usuaUsuario
 */
?>
<div class="usuaUsuario index content">
    <?= $this->Html->link(__('New Usua Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usua Usuario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('usua_codigo') ?></th>
                    <th><?= $this->Paginator->sort('usua_clie_codigo') ?></th>
                    <th><?= $this->Paginator->sort('usua_email') ?></th>
                    <th><?= $this->Paginator->sort('usua_senha') ?></th>
                    <th><?= $this->Paginator->sort('usua_nome') ?></th>
                    <th><?= $this->Paginator->sort('usua_created') ?></th>
                    <th><?= $this->Paginator->sort('usua_modified') ?></th>
                    <th><?= $this->Paginator->sort('usua_deleted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuaUsuario as $usuaUsuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuaUsuario->usua_codigo) ?></td>
                    <td><?= $this->Number->format($usuaUsuario->usua_clie_codigo) ?></td>
                    <td><?= h($usuaUsuario->usua_email) ?></td>
                    <td><?= h($usuaUsuario->usua_senha) ?></td>
                    <td><?= h($usuaUsuario->usua_nome) ?></td>
                    <td><?= h($usuaUsuario->usua_created) ?></td>
                    <td><?= h($usuaUsuario->usua_modified) ?></td>
                    <td><?= h($usuaUsuario->usua_deleted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuaUsuario->usua_codigo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuaUsuario->usua_codigo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuaUsuario->usua_codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $usuaUsuario->usua_codigo)]) ?>
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
