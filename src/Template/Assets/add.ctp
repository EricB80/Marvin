<div class="row">
    <?= $this->Form->create($asset) ?>
    <fieldset>
        <legend><?= __('Add Asset') ?></legend>
        <?php
            echo $this->Form->input('asset_tag');
            echo $this->Form->input('department_id', ['options' => $departments, 'empty' => true]);
            echo $this->Form->input('asset_model_id', ['options' => $assetModels]);
            echo $this->Form->input('location_id', ['options' => $locations]);
            echo $this->Form->input('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
