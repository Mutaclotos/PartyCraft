<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasProveedorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasProveedorTable Test Case
 */
class CategoriasProveedorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasProveedorTable
     */
    public $CategoriasProveedor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categorias_proveedor'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoriasProveedor') ? [] : ['className' => 'App\Model\Table\CategoriasProveedorTable'];
        $this->CategoriasProveedor = TableRegistry::get('CategoriasProveedor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriasProveedor);

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
