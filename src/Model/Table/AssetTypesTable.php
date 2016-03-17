<?php
namespace App\Model\Table;

use App\Model\Entity\AssetType;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AssetTypes Model
 *
 * @property \Cake\ORM\Association\HasMany $AssetModels
 */
class AssetTypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('asset_types');
        $this->displayField('asset_type_desc');
        $this->primaryKey('id');

        $this->hasMany('AssetModels', [
            'foreignKey' => 'asset_type_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('asset_type_desc');

        $validator
            ->dateTime('created_date')
            ->allowEmpty('created_date');

        $validator
            ->dateTime('modified_date')
            ->allowEmpty('modified_date');

        return $validator;
    }
}
