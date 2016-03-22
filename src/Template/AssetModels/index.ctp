<div class="assetModels index large-9 medium-8 columns content">
    <h3><?= __('Asset Models') ?></h3>
    <table class="table-bordered table-condensed table-striped table-responsive">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('manufacturer_id') ?></th>
                <th><?= $this->Paginator->sort('model_desc') ?></th>
                <th><?= $this->Paginator->sort('created_date') ?></th>
                <th><?= $this->Paginator->sort('modified_date') ?></th>
                <th><?= $this->Paginator->sort('notes') ?></th>
                <th><?= $this->Paginator->sort('asset_type_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assetModels as $assetModel): ?>
            <tr>
                <td><?= $this->Number->format($assetModel->id) ?></td>
                <td><?= $assetModel->has('manufacturer') ? $this->Html->link($assetModel->manufacturer->manufacturer_desc, ['controller' => 'Manufacturers', 'action' => 'view', $assetModel->manufacturer->id]) : '' ?></td>
                <td><?= h($assetModel->model_desc) ?></td>
                <td><?= h($assetModel->created_date) ?></td>
                <td><?= h($assetModel->modified_date) ?></td>
                <td><?= h($assetModel->notes) ?></td>
                <td><?= $assetModel->has('asset_type') ? $this->Html->link($assetModel->asset_type->id, ['controller' => 'AssetTypes', 'action' => 'view', $assetModel->asset_type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assetModel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assetModel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assetModel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetModel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
