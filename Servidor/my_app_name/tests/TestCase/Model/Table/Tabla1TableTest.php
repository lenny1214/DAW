<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Tabla1Table;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Tabla1Table Test Case
 */
class Tabla1TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Tabla1Table
     */
    protected $Tabla1;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Tabla1',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tabla1') ? [] : ['className' => Tabla1Table::class];
        $this->Tabla1 = $this->getTableLocator()->get('Tabla1', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tabla1);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\Tabla1Table::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
