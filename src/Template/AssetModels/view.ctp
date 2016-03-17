<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asset Model'), ['action' => 'edit', $assetModel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asset Model'), ['action' => 'delete', $assetModel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetModel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Asset Models'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Model'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asset Types'), ['controller' => 'AssetTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Type'), ['controller' => 'AssetTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assetModels view large-9 medium-8 columns content">
    <h3><?= h($assetModel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Manufacturer') ?></th>
            <td><?= $assetModel->has('manufacturer') ? $this->Html->link($assetModel->manufacturer->id, ['controller' => 'Manufacturers', 'action' => 'view', $assetModel->manufacturer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Model Desc') ?></th>
            <td><?= h($assetModel->model_desc) ?></td>
        </tr>
        <tr>
            <th><?= __('Notes') ?></th>
            <td><?= h($assetModel->notes) ?></td>
        </tr>
        <tr>
            <th><?= __('Asset Type') ?></th>
            <td><?= $assetModel->has('asset_type') ? $this->Html->link($assetModel->asset_type->id, ['controller' => 'AssetTypes', 'action' => 'view', $assetModel->asset_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($assetModel->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created Date') ?></th>
            <td><?= h($assetModel->created_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified Date') ?></th>
            <td><?= h($assetModel->modified_date) ?></td>
        </tr>
    </table>
</div>
