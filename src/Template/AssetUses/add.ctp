<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Asset Uses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="assetUses form large-9 medium-8 columns content">
    <?= $this->Form->create($assetUse) ?>
    <fieldset>
        <legend><?= __('Add Asset Use') ?></legend>
        <?php
            echo $this->Form->input('use_desc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
