<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $assetUse->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $assetUse->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Asset Uses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="assetUses form large-9 medium-8 columns content">
    <?= $this->Form->create($assetUse) ?>
    <fieldset>
        <legend><?= __('Edit Asset Use') ?></legend>
        <?php
            echo $this->Form->input('use_desc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
