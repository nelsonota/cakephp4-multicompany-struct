<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuaUsuarioFixture
 */
class UsuaUsuarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usua_usuario';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'usua_codigo' => ['type' => 'biginteger', 'length' => 20, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'usua_clie_codigo' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'usua_email' => ['type' => 'string', 'length' => 128, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'usua_senha' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'usua_nome' => ['type' => 'string', 'length' => 60, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'usua_created' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 6],
        'usua_modified' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 6],
        'usua_deleted' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 6],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['usua_codigo'], 'length' => []],
            'usua_usuario_usua_email_key' => ['type' => 'unique', 'columns' => ['usua_email'], 'length' => []],
            'usua_clie' => ['type' => 'foreign', 'columns' => ['usua_clie_codigo'], 'references' => ['clie_cliente', 'clie_codigo'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                // 'usua_codigo' => 1,
                'usua_clie_codigo' => 1,
                'usua_email' => 'Lorem ipsum dolor sit amet',
                'usua_senha' => 'Lorem ipsum dolor sit amet',
                'usua_nome' => 'Lorem ipsum dolor sit amet',
                'usua_created' => 1635020487,
                'usua_modified' => 1635020487,
                'usua_deleted' => null,
            ],
        ];
        parent::init();
    }
}
