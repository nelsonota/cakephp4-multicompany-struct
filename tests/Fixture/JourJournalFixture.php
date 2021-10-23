<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JourJournalFixture
 */
class JourJournalFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'jour_journal';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'jour_codigo' => ['type' => 'biginteger', 'length' => 20, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'jour_model' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'jour_model_codigo' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'jour_json_data' => ['type' => 'json', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'jour_created' => ['type' => 'timestamptimezone', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 6],
        'jour_usua_codigo' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'jour_empr_codigo' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['jour_codigo'], 'length' => []],
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'jour_codigo' => 1,
                'jour_model' => 'Lorem ipsum dolor sit amet',
                'jour_model_codigo' => 1,
                'jour_json_data' => '',
                'jour_created' => 1635020487,
                'jour_usua_codigo' => 1,
                'jour_empr_codigo' => 1,
            ],
        ];
        parent::init();
    }
}
