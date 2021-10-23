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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clieCliente->clie_codigo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clieCliente->clie_codigo), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clie Cliente'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clieCliente form content">
            <?= $this->Form->create($clieCliente) ?>
            <fieldset>
                <legend><?= __('Edit Clie Cliente') ?></legend>
                <?php
                    echo $this->Form->control('clie_documento');
                    echo $this->Form->control('clie_razao_social');
                    echo $this->Form->control('clie_token');
                    echo $this->Form->control('clie_created');
                    echo $this->Form->control('clie_modified');
                    echo $this->Form->control('clie_deleted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
