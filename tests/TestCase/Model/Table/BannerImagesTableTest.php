<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BannerImagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BannerImagesTable Test Case
 */
class BannerImagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BannerImagesTable
     */
    protected $BannerImages;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BannerImages',
        'app.Banners',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BannerImages') ? [] : ['className' => BannerImagesTable::class];
        $this->BannerImages = $this->getTableLocator()->get('BannerImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BannerImages);

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
