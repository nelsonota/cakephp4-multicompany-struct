<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuaUsuarioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuaUsuarioTable Test Case
 */
class UsuaUsuarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuaUsuarioTable
     */
    protected $UsuaUsuario;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('UsuaUsuario') ? [] : ['className' => UsuaUsuarioTable::class];
        $this->UsuaUsuario = $this->getTableLocator()->get('UsuaUsuario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UsuaUsuario);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsuaUsuarioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
