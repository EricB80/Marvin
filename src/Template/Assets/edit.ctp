<div class="assets form large-9 medium-8 columns content">
    <?= $this->Form->create($asset, ['class'=>'form-horizontal']) ?>
    <fieldset>
        <legend><?= __('Edit Asset') ?></legend>
        <?php
            echo $this->Form->input('asset_tag');
            echo $this->Form->input('department_id', ['options' => $departments, 'empty' => true]);
            echo $this->Form->input('use_id', ['options'=> $uses]);
            echo $this->Form->input('asset_model_id', ['options' => $assetModels]);
            echo $this->Form->input('location_id', ['options' => $locations]);
            echo $this->Form->input('memory');
            echo $this->Form->input('firmware_version');
            echo $this->Form->input('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
