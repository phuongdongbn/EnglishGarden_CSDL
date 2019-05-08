<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KhoahocsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KhoahocsTable Test Case
 */
class KhoahocsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KhoahocsTable
     */
    public $Khoahocs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Khoahocs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Khoahocs') ? [] : ['className' => KhoahocsTable::class];
        $this->Khoahocs = TableRegistry::getTableLocator()->get('Khoahocs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Khoahocs);

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
