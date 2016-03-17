<?php
use Migrations\AbstractMigration;

class CreateAssets extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('assets');
        $table->addColumn('asset_tag', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('department_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('asset_model_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('location_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('notes', 'text', [
            'default'=> null,
            'null' => true
        ]);
        $table->create();
    }
}
