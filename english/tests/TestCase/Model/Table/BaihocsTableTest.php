<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BaihocsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BaihocsTable Test Case
 */
class BaihocsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BaihocsTable
     */
    public $Baihocs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Baihocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Baihocs') ? [] : ['className' => BaihocsTable::class];
        $this->Baihocs = TableRegistry::getTableLocator()->get('Baihocs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Baihocs);

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
