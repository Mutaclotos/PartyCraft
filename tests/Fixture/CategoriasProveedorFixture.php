<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriasProveedorFixture
 *
 */
class CategoriasProveedorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'categorias_proveedor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_proveedor' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'categoria' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'id_proveedor' => ['type' => 'index', 'columns' => ['id_proveedor', 'categoria'], 'length' => []],
            'categoria' => ['type' => 'index', 'columns' => ['categoria'], 'length' => []],
        ],
        '_constraints' => [
            'nombre_categoria' => ['type' => 'foreign', 'columns' => ['categoria'], 'references' => ['categorias', 'nombreCategoria'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'proveedor_categoria' => ['type' => 'foreign', 'columns' => ['id_proveedor'], 'references' => ['proveedores', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_proveedor' => 1,
            'categoria' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
