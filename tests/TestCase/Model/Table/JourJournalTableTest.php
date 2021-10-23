<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JourJournalTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JourJournalTable Test Case
 */
class JourJournalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JourJournalTable
     */
    protected $JourJournal;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.JourJournal',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('JourJournal') ? [] : ['className' => JourJournalTable::class];
        $this->JourJournal = $this->getTableLocator()->get('JourJournal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->JourJournal);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\JourJournalTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
