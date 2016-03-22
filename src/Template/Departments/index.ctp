<div class="row">
    <h3><?= __('Departments') ?></h3>
    <?= $this->Html->link(__('Add New Department'), ['action' =>'add']); ?>
</div>
<div class="row">
    <div class="col-md-9">
        <table class="table table-bordered table-condensed table-responsive table-striped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('dept_desc') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departments as $department): ?>
                    <tr>
                        <td><?= $department->dept_desc ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $department->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $department->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id)]) ?>
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
