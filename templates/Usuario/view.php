<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsuaUsuario $usuaUsuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usua Usuario'), ['action' => 'edit', $usuaUsuario->usua_codigo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usua Usuario'), ['action' => 'delete', $usuaUsuario->usua_codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $usuaUsuario->usua_codigo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usua Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usua Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuaUsuario view content">
            <h3><?= h($usuaUsuario->usua_codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usua Email') ?></th>
                    <td><?= h($usuaUsuario->usua_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usua Senha') ?></th>
                    <td><?= h($usuaUsuario->usua_senha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usua Nome') ?></th>
                    <td><?= h($usuaUsuario->usua_nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usua Codigo') ?></th>
                    <td><?= $this->Number->format($usuaUsuario->usua_codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usua Clie Codigo') ?></th>
                    <td><?= $this->Number->format($usuaUsuario->usua_clie_codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usua Created') ?></th>
                    <td><?= h($usuaUsuario->usua_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usua Modified') ?></th>
                    <td><?= h($usuaUsuario->usua_modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usua Deleted') ?></th>
                    <td><?= h($usuaUsuario->usua_deleted) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
