<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Asset Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Asset Models'), ['controller' => 'AssetModels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Model'), ['controller' => 'AssetModels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assetTypes index large-9 medium-8 columns content">
    <h3><?= __('Asset Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('asset_type_desc') ?></th>
                <th><?= $this->Paginator->sort('created_date') ?></th>
                <th><?= $this->Paginator->sort('modified_date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assetTypes as $assetType): ?>
            <tr>
                <td><?= $this->Number->format($assetType->id) ?></td>
                <td><?= h($assetType->asset_type_desc) ?></td>
                <td><?= h($assetType->created_date) ?></td>
                <td><?= h($assetType->modified_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assetType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assetType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assetType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetType->id)]) ?>
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
