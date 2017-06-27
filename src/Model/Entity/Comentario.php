<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comentario Entity
 *
 * @property int $id
 * @property string $usuario_id
 * @property int $proveedor_id
 * @property \Cake\I18n\Time $fecha
 * @property int $puntaje
 * @property string $contenido
 * @property int $likes
 * @property int $dislikes
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Proveedore $proveedore
 */
class Comentario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
