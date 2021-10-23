<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClieClienteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClieClienteTable Test Case
 */
class ClieClienteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClieClienteTable
     */
    protected $ClieCliente;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ClieCliente',
        'app.UsuaUsuario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ClieCliente') ? [] : ['className' => ClieClienteTable::class];
        $this->ClieCliente = $this->getTableLocator()->get('ClieCliente', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ClieCliente);

        parent::tearDown();
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Model\Table\ClieClienteTable::add()
     */
    public function testAdd(): void
    {
        $data = [
            "clie_documento" => "52173606000122",
            "clie_razao_social" => "Akosa",
            "usua_usuario" => [
                [
                    "usua_nome" => "Nelson",
                    "usua_email" => "nelsonota@gmail.com",
                    "usua_senha" => "123456",
                ],
            ],
        ];
        $clieCliente = $this->ClieCliente->newEntity($data, ['associated' => ['UsuaUsuario']]);
        $this->ClieCliente->save($clieCliente);
        $this->assertEquals(1, $this->ClieCliente->UsuaUsuario->find()->where(['usua_email' => 'nelsonota@gmail.com'])->count());
        $this->assertEmpty($clieCliente->getErrors());
    }
}
