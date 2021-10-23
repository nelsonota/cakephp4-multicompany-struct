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
            <?= $this->Html->link(__('List Usua Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuaUsuario form content">
            <?= $this->Form->create($usuaUsuario) ?>
            <fieldset>
                <legend><?= __('Add Usua Usuario') ?></legend>
                <?php
                    echo $this->Form->control('usua_clie_codigo');
                    echo $this->Form->control('usua_email');
                    echo $this->Form->control('usua_senha');
                    echo $this->Form->control('usua_nome');
                    echo $this->Form->control('usua_created');
                    echo $this->Form->control('usua_modified');
                    echo $this->Form->control('usua_deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
