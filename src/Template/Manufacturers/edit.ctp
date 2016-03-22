<div class="row">
    <?= $this->Form->create($manufacturer) ?>
    <fieldset>
        <legend><?= __('Edit Manufacturer') ?></legend>
        <?php
            echo $this->Form->input('manufacturer_desc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
