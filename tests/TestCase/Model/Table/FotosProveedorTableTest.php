<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FotosProveedorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FotosProveedorTable Test Case
 */
class FotosProveedorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FotosProveedorTable
     */
    public $FotosProveedor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fotos_proveedor'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FotosProveedor') ? [] : ['className' => 'App\Model\Table\FotosProveedorTable'];
        $this->FotosProveedor = TableRegistry::get('FotosProveedor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FotosProveedor);

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
