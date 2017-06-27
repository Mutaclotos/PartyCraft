<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FotosProveedorFixture
 *
 */
class FotosProveedorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'fotos_proveedor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_proveedor' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'foto' => ['type' => 'string', 'length' => 512, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'id_proveedor' => ['type' => 'index', 'columns' => ['id_proveedor'], 'length' => []],
        ],
        '_constraints' => [
            'proveedor_foto' => ['type' => 'foreign', 'columns' => ['id_proveedor'], 'references' => ['proveedores', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
            'foto' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
