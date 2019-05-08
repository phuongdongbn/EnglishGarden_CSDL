<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DanhmucsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DanhmucsTable Test Case
 */
class DanhmucsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DanhmucsTable
     */
    public $Danhmucs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Danhmucs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Danhmucs') ? [] : ['className' => DanhmucsTable::class];
        $this->Danhmucs = TableRegistry::getTableLocator()->get('Danhmucs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Danhmucs);

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
