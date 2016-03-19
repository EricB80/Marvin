<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asset Use'), ['action' => 'edit', $assetUse->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asset Use'), ['action' => 'delete', $assetUse->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetUse->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Asset Uses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Use'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assetUses view large-9 medium-8 columns content">
    <h3><?= h($assetUse->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Use Desc') ?></th>
            <td><?= h($assetUse->use_desc) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($assetUse->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($assetUse->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($assetUse->modified) ?></td>
        </tr>
    </table>
</div>
