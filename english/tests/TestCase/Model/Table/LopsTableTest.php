<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LopsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LopsTable Test Case
 */
class LopsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LopsTable
     */
    public $Lops;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Lops'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Lops') ? [] : ['className' => LopsTable::class];
        $this->Lops = TableRegistry::getTableLocator()->get('Lops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lops);

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
}
