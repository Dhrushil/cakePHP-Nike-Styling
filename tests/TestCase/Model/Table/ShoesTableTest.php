<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShoesTable Test Case
 */
class ShoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ShoesTable
     */
    protected $Shoes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Shoes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Shoes') ? [] : ['className' => ShoesTable::class];
        $this->Shoes = TableRegistry::getTableLocator()->get('Shoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Shoes);

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
}
