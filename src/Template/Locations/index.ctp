<div class="row">
    <h3><?= __('Locations') ?></h3>
    <?= $this->Html->link(__('Add New Location'), ['action' => 'add']) ?>
</div>
<div class="row">
    <div class="col-md-10">
        <table class="table table-condensed table-bordered table-responsive table-striped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('location_desc') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($locations as $location): ?>
                    <tr>
                        <td><?= h($location->location_desc) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $location->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $location->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?>
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
</div>