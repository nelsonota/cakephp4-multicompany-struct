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
            <?= $this->Html->link(__('List Jour Journal'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jourJournal form content">
            <?= $this->Form->create($jourJournal) ?>
            <fieldset>
                <legend><?= __('Add Jour Journal') ?></legend>
                <?php
                    echo $this->Form->control('jour_model');
                    echo $this->Form->control('jour_model_codigo');
                    echo $this->Form->control('jour_json_data');
                    echo $this->Form->control('jour_created');
                    echo $this->Form->control('jour_usua_codigo');
                    echo $this->Form->control('jour_empr_codigo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
