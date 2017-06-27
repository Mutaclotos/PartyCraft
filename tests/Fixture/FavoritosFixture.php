<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FavoritosFixture
 *
 */
class FavoritosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'nombreUsuario' => ['type' => 'string', 'length' => 16, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'idProveedor' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'nombreUsuario' => ['type' => 'index', 'columns' => ['nombreUsuario', 'idProveedor'], 'length' => []],
            'idProveedor' => ['type' => 'index', 'columns' => ['idProveedor'], 'length' => []],
            'nombreUsuario_2' => ['type' => 'index', 'columns' => ['nombreUsuario'], 'length' => []],
        ],
        '_constraints' => [
            'proveedor_favorito' => ['type' => 'foreign', 'columns' => ['idProveedor'], 'references' => ['proveedores', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'usuario_favorito' => ['type' => 'foreign', 'columns' => ['nombreUsuario'], 'references' => ['usuarios', 'username'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
            'nombreUsuario' => 'Lorem ipsum do',
            'idProveedor' => 1
        ],
    ];
}
