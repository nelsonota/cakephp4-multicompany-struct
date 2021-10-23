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
            <?= $this->Html->link(__('List Jdet Journal Detail'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jdetJournalDetail form content">
            <?= $this->Form->create($jdetJournalDetail) ?>
            <fieldset>
                <legend><?= __('Add Jdet Journal Detail') ?></legend>
                <?php
                    echo $this->Form->control('jdet_jour_codigo');
                    echo $this->Form->control('jdet_property');
                    echo $this->Form->control('jdet_prop_key');
                    echo $this->Form->control('jdet_old_value');
                    echo $this->Form->control('jdet_value');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
