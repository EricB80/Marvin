<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Asset Models'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Asset Types'), ['controller' => 'AssetTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Type'), ['controller' => 'AssetTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assetModels form large-9 medium-8 columns content">
    <?= $this->Form->create($assetModel) ?>
    <fieldset>
        <legend><?= __('Add Asset Model') ?></legend>
        <?php
            echo $this->Form->input('manufacturer_id', ['options' => $manufacturers, 'empty' => true]);
            echo $this->Form->input('model_desc');
            echo $this->Form->input('notes');
            echo $this->Form->input('asset_type_id', ['options' => $assetTypes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
