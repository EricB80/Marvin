<div class="assets view large-9 medium-8 columns content">
    <h3><?= h($asset->asset_tag) ?></h3>
    <div class="col-md-9">
        <table class="table table-condensed table-striped table-responsive">
            <tr>
                <th><?= __('Asset Tag') ?></th>
                <td><?= h($asset->asset_tag) ?></td>
            </tr>
            <tr>
                <th><?= __('Department') ?></th>
                <td><?= $asset->has('department') ? $this->Html->link($asset->department->dept_desc, ['controller' => 'Departments', 'action' => 'view', $asset->department->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Asset Model') ?></th>
                <td><?= $asset->has('asset_model') ? $this->Html->link($asset->asset_model->model_desc, ['controller' => 'AssetModels', 'action' => 'view', $asset->asset_model->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Location') ?></th>
                <td><?= $asset->has('location') ? $this->Html->link($asset->location->location_desc, ['controller' => 'Locations', 'action' => 'view', $asset->location->id]) : '' ?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-3">
        <h4><?= __('Notes:') ?></h4>
        <?= $this->Text->autoParagraph(h($asset->notes)); ?>
    </div>
</div>
