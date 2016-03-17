<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asset'), ['action' => 'edit', $asset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asset'), ['action' => 'delete', $asset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $asset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asset Models'), ['controller' => 'AssetModels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Model'), ['controller' => 'AssetModels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assets view large-9 medium-8 columns content">
    <h3><?= h($asset->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Asset Tag') ?></th>
            <td><?= h($asset->asset_tag) ?></td>
        </tr>
        <tr>
            <th><?= __('Department') ?></th>
            <td><?= $asset->has('department') ? $this->Html->link($asset->department->id, ['controller' => 'Departments', 'action' => 'view', $asset->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Asset Model') ?></th>
            <td><?= $asset->has('asset_model') ? $this->Html->link($asset->asset_model->id, ['controller' => 'AssetModels', 'action' => 'view', $asset->asset_model->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Location') ?></th>
            <td><?= $asset->has('location') ? $this->Html->link($asset->location->id, ['controller' => 'Locations', 'action' => 'view', $asset->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($asset->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($asset->notes)); ?>
    </div>
</div>
