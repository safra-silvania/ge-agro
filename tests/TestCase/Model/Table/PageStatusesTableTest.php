<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PageStatusesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PageStatusesTable Test Case
 */
class PageStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PageStatusesTable
     */
    protected $PageStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PageStatuses',
        'app.Pages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PageStatuses') ? [] : ['className' => PageStatusesTable::class];
        $this->PageStatuses = $this->getTableLocator()->get('PageStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PageStatuses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
