<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BannersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BannersTable Test Case
 */
class BannersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BannersTable
     */
    protected $Banners;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Banners',
        'app.Tenants',
        'app.BannerImages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Banners') ? [] : ['className' => BannersTable::class];
        $this->Banners = $this->getTableLocator()->get('Banners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Banners);

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
