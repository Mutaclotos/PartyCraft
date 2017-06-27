<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContactosProveedorFixture
 *
 */
class ContactosProveedorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'contactos_proveedor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_proveedor' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'descripcion' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'contacto' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'id_proveedor' => ['type' => 'index', 'columns' => ['id_proveedor'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_proveedor'], 'length' => []],
            'proveedor_contacto' => ['type' => 'foreign', 'columns' => ['id_proveedor'], 'references' => ['proveedores', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
            'descripcion' => 'Lorem ipsum dolor sit amet',
            'contacto' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
