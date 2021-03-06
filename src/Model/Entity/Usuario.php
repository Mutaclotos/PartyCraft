<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;

/**
 * Usuario Entity
 *
 * @property string $username
 * @property string $correo
 * @property string $nombreReal
 * @property string $contrasena
 * @property string $telefono
 * @property string $fotoPerfil
 *
 * @property \App\Model\Entity\Comentario[] $comentarios
 */
class Usuario extends Entity
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
        'username' => true,
        'contrasena' => true,
        'nombreReal' => true,
        'correo' => true,
        'fotoPerfil' => true,
        'telefono' => true,
        'id' => false
    ];
    /*
    protected function _setPassword($contrasena)
    {
        if (strlen($contrasena) > 0) {
                return (new DefaultPasswordHasher)->hash($contrasena);
            }
        
    }
    */
    protected function _setContrasena($contrasena)
    {
        if (!empty($contrasena)) 
        {
            return (new DefaultPasswordHasher)->hash($contrasena);
        }
        else
        {
            $id_usuario = $this->_properties['id'];
            $usuario = TableRegistry::get('Usuarios')->recoverPassword($id_usuario);
            return $usuario;
        }
    }
    
  
}
