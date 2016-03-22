<div class="row">
    <h3><?= __('Manufacturers') ?></h3>
</div>
<div class="row">
    <div class="col-md-9">
        <table class="table table-bordered table-condensed table-striped table-responsive">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('manufacturer_desc') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($manufacturers as $manufacturer): ?>
                    <tr>
                        <td><?= h($manufacturer->manufacturer_desc) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $manufacturer->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $manufacturer->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $manufacturer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $manufacturer->id)]) ?>
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
