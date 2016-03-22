<div class="row">
    <?= $this->Form->create($assetType) ?>
    <fieldset>
        <legend><?= __('Add New Asset Type') ?></legend>
        <h4>Example: Computer, Printer</h4>
        <div class="form-group">
            <label class="col-md-4">Asset Type:</label>
            <?php
            echo $this->Form->input('asset_type_desc');
            ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
    <div class="row">
        <div class="col-md-10">
            <table class="table table-condensed table-bordered table-responsive table-striped">
                <thead>
                    <tr>
                        <th>Asset Types</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Asset List here</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>ß
</div>
