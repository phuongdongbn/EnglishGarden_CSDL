<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GiangviensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GiangviensTable Test Case
 */
class GiangviensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GiangviensTable
     */
    public $Giangviens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Giangviens'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Giangviens') ? [] : ['className' => GiangviensTable::class];
        $this->Giangviens = TableRegistry::getTableLocator()->get('Giangviens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Giangviens);

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
