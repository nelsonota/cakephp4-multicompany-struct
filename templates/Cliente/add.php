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
            <?= $this->Html->link(__('List Clie Cliente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clieCliente form content">
            <?= $this->Form->create($clieCliente) ?>
            <fieldset>
                <legend><?= __('Add Clie Cliente') ?></legend>
                <?php
                    echo $this->Form->control('clie_documento');
                    echo $this->Form->control('clie_razao_social');
                    echo $this->Form->control('usua_usuario.0.usua_nome');
                    echo $this->Form->control('usua_usuario.0.usua_email');
                    echo $this->Form->control('usua_usuario.0.usua_senha');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
