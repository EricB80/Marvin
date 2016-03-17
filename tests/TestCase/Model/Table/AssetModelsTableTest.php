<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssetModelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssetModelsTable Test Case
 */
class AssetModelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssetModelsTable
     */
    public $AssetModels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.asset_models',
        'app.manufacturers',
        'app.asset_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AssetModels') ? [] : ['className' => 'App\Model\Table\AssetModelsTable'];
        $this->AssetModels = TableRegistry::get('AssetModels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AssetModels);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
