<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubpagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubpagesTable Test Case
 */
class SubpagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubpagesTable
     */
    protected $Subpages;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Subpages',
        'app.Pages',
        'app.PageStatuses',
        'app.Tenants',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Subpages') ? [] : ['className' => SubpagesTable::class];
        $this->Subpages = $this->getTableLocator()->get('Subpages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Subpages);

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
