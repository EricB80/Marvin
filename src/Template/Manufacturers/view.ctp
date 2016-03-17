<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Manufacturer'), ['action' => 'edit', $manufacturer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Manufacturer'), ['action' => 'delete', $manufacturer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $manufacturer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asset Models'), ['controller' => 'AssetModels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Model'), ['controller' => 'AssetModels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="manufacturers view large-9 medium-8 columns content">
    <h3><?= h($manufacturer->manufacturer_desc) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Manufacturer Desc') ?></th>
            <td><?= h($manufacturer->manufacturer_desc) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($manufacturer->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created Date') ?></th>
            <td><?= h($manufacturer->created_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified Date') ?></th>
            <td><?= h($manufacturer->modified_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Asset Models') ?></h4>
        <?php if (!empty($manufacturer->asset_models)): ?>
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
            <?php foreach ($manufacturer->asset_models as $assetModels): ?>
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
