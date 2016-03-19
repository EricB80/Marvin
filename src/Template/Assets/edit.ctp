<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $asset->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $asset->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Asset Models'), ['controller' => 'AssetModels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Model'), ['controller' => 'AssetModels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assets form large-9 medium-8 columns content">
    <?= $this->Form->create($asset) ?>
    <fieldset>
        <legend><?= __('Edit Asset') ?></legend>
        <?php
            echo $this->Form->input('asset_tag');
            echo $this->Form->input('department_id', ['options' => $departments, 'empty' => true]);
            echo $this->Form->input('use_id', ['options'=> $uses]);
            echo $this->Form->input('asset_model_id', ['options' => $assetModels]);
            echo $this->Form->input('location_id', ['options' => $locations]);
            echo $this->Form->input('memory');
            echo $this->Form->input('firmware_version');
            echo $this->Form->input('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
