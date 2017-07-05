<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Favoritos Model
 *
 * @method \App\Model\Entity\Favorito get($primaryKey, $options = [])
 * @method \App\Model\Entity\Favorito newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Favorito[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Favorito|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Favorito patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Favorito[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Favorito findOrCreate($search, callable $callback = null, $options = [])
 */
class FavoritosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('favoritos');
        $this->displayField('id');
        $this->primaryKey('id');
        
        $this->belongsTo('Usuarios', [
                'foreignKey' => 'usuario_favorito',
                'joinType' => 'INNER']);
                
        $this->hasOne('Proveedores', [
                'foreignKey' => 'proveedor_favorito',
                'joinType' => 'INNER']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->notEmpty('id', 'create');
        
        $validator
            ->requirePresence('nombreUsuario', 'create')
            ->notEmpty('nombreUsuario');

        $validator
            ->integer('idProveedor')
            ->requirePresence('idProveedor', 'create')
            ->notEmpty('idProveedor');

        return $validator;
    }
}
