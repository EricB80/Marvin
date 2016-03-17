<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $assetModel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $assetModel->id)]
            )
        ?></li>
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
        <legend><?= __('Edit Asset Model') ?></legend>
        <?php
            echo $this->Form->input('manufacturer_id', ['options' => $manufacturers, 'empty' => true]);
            echo $this->Form->input('model_desc');
            echo $this->Form->input('created_date', ['empty' => true]);
            echo $this->Form->input('modified_date');
            echo $this->Form->input('notes');
            echo $this->Form->input('asset_type_id', ['options' => $assetTypes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
