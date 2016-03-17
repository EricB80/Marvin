<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asset Type'), ['action' => 'edit', $assetType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asset Type'), ['action' => 'delete', $assetType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Asset Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asset Models'), ['controller' => 'AssetModels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Model'), ['controller' => 'AssetModels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assetTypes view large-9 medium-8 columns content">
    <h3><?= h($assetType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Asset Type Desc') ?></th>
            <td><?= h($assetType->asset_type_desc) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($assetType->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created Date') ?></th>
            <td><?= h($assetType->created_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified Date') ?></th>
            <td><?= h($assetType->modified_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Asset Models') ?></h4>
        <?php if (!empty($assetType->asset_models)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Manufacturer Id') ?></th>
                <th><?= __('Model Desc') ?></th>
                <th><?= __('Created Date') ?></th>
                <th><?= __('Modified Date') ?></th>
                <th><?= __('Notes') ?></th>
                <th><?= __('Asset Type Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($assetType->asset_models as $assetModels): ?>
            <tr>
                <td><?= h($assetModels->id) ?></td>
                <td><?= h($assetModels->manufacturer_id) ?></td>
                <td><?= h($assetModels->model_desc) ?></td>
                <td><?= h($assetModels->created_date) ?></td>
                <td><?= h($assetModels->modified_date) ?></td>
                <td><?= h($assetModels->notes) ?></td>
                <td><?= h($assetModels->asset_type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AssetModels', 'action' => 'view', $assetModels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AssetModels', 'action' => 'edit', $assetModels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AssetModels', 'action' => 'delete', $assetModels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetModels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
