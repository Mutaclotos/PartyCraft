<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Favorito Entity
 *
 * @property string $nombreUsuario
 * @property int $idProveedor
 */
class Favorito extends Entity
{
        protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
