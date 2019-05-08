<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HocviensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HocviensTable Test Case
 */
class HocviensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HocviensTable
     */
    public $Hocviens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Hocviens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Hocviens') ? [] : ['className' => HocviensTable::class];
        $this->Hocviens = TableRegistry::getTableLocator()->get('Hocviens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hocviens);

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
