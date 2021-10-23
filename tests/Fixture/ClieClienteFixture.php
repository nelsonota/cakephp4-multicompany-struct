<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClieClienteFixture
 */
class ClieClienteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'clie_cliente';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'clie_codigo' => ['type' => 'biginteger', 'length' => 20, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'clie_documento' => ['type' => 'string', 'length' => 14, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'clie_razao_social' => ['type' => 'string', 'length' => 60, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'clie_token' => ['type' => 'string', 'length' => 512, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'clie_created' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 6],
        'clie_modified' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 6],
        'clie_deleted' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 6],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['clie_codigo'], 'length' => []],
            'clie_cliente_clie_documento_key' => ['type' => 'unique', 'columns' => ['clie_documento'], 'length' => []],
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
                // 'clie_codigo' => 1,
                'clie_documento' => 'Lorem ipsum ',
                'clie_razao_social' => 'Lorem ipsum dolor sit amet',
                'clie_token' => 'Lorem ipsum dolor sit amet',
                'clie_created' => 1635020486,
                'clie_modified' => 1635020486,
                'clie_deleted' => null,
            ],
        ];
        parent::init();
    }
}
