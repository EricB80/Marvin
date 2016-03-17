<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Asset Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Asset Models'), ['controller' => 'AssetModels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Model'), ['controller' => 'AssetModels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assetTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($assetType) ?>
    <fieldset>
        <legend><?= __('Add Asset Type') ?></legend>
        <?php
            echo $this->Form->input('asset_type_desc');
            echo $this->Form->input('created_date', ['empty' => true]);
            echo $this->Form->input('modified_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
