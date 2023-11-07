<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Tabla1Fixture
 */
class Tabla1Fixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'tabla1';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nombre' => 'Lore',
            ],
        ];
        parent::init();
    }
}
