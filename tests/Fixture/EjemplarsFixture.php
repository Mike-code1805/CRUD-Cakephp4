<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EjemplarsFixture
 */
class EjemplarsFixture extends TestFixture
{
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
                'ISBN' => 'Lorem ipsum dolor sit amet',
                'editorial' => 'Lorem ipsum dolor sit amet',
                'cantidad' => 1,
                'libros_id' => 1,
                'created' => '2022-10-24 11:02:06',
                'modified' => '2022-10-24 11:02:06',
            ],
        ];
        parent::init();
    }
}
