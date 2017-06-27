<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComentariosFixture
 *
 */
class ComentariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'usuario_id' => ['type' => 'string', 'length' => 16, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'proveedor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'puntaje' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contenido' => ['type' => 'string', 'length' => 512, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'likes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dislikes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'usuario_id' => ['type' => 'index', 'columns' => ['usuario_id', 'proveedor_id'], 'length' => []],
            'usuario_id_2' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
            'proveedor_id' => ['type' => 'index', 'columns' => ['proveedor_id'], 'length' => []],
            'proveedor_id_2' => ['type' => 'index', 'columns' => ['proveedor_id'], 'length' => []],
            'proveedor_id_3' => ['type' => 'index', 'columns' => ['proveedor_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'proveedor_comentario' => ['type' => 'foreign', 'columns' => ['proveedor_id'], 'references' => ['proveedores', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'usuario_comentario' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuarios', 'username'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
            'id' => 1,
            'usuario_id' => 'Lorem ipsum do',
            'proveedor_id' => 1,
            'fecha' => '2017-06-27',
            'puntaje' => 1,
            'contenido' => 'Lorem ipsum dolor sit amet',
            'likes' => 1,
            'dislikes' => 1
        ],
    ];
}
