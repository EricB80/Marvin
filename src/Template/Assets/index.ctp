<div class="assets index large-9 medium-8 columns content">
    <h3><?= __('Assets') ?></h3>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('asset_tag') ?></th>
                <th><?= $this->Paginator->sort('department_id') ?></th>
                <th><?= $this->Paginator->sort('asset_model_id') ?></th>
                <th><?= $this->Paginator->sort('location_id') ?></th>
                <th><?= $this->Paginator->sort('memory') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assets as $asset): ?>
            <tr>
                <td><?= h($asset->asset_tag) ?></td>
                <td><?= $asset->has('department') ? $this->Html->link($asset->department->dept_desc, ['controller' => 'Departments', 'action' => 'view', $asset->department->id]) : '' ?></td>
                <td><?= $asset->has('asset_model') ? $this->Html->link($asset->asset_model->model_desc, ['controller' => 'AssetModels', 'action' => 'view', $asset->asset_model->id]) : '' ?></td>
                <td><?= $asset->has('location') ? $this->Html->link($asset->location->location_desc, ['controller' => 'Locations', 'action' => 'view', $asset->location->id]) : '' ?></td>
                <td><?= $asset->has('memory') ? $asset->memory.'gb' : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $asset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $asset->id)]) ?>
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
