<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JdetJournalDetailTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JdetJournalDetailTable Test Case
 */
class JdetJournalDetailTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JdetJournalDetailTable
     */
    protected $JdetJournalDetail;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.JdetJournalDetail',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('JdetJournalDetail') ? [] : ['className' => JdetJournalDetailTable::class];
        $this->JdetJournalDetail = $this->getTableLocator()->get('JdetJournalDetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->JdetJournalDetail);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\JdetJournalDetailTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
