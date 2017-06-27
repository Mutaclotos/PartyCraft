<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FavoritosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FavoritosTable Test Case
 */
class FavoritosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FavoritosTable
     */
    public $Favoritos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.favoritos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Favoritos') ? [] : ['className' => 'App\Model\Table\FavoritosTable'];
        $this->Favoritos = TableRegistry::get('Favoritos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Favoritos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
