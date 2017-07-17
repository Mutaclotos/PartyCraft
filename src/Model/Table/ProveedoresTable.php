<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proveedores Model
 *
 * @method \App\Model\Entity\Proveedore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proveedore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proveedore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedore findOrCreate($search, callable $callback = null, $options = [])
 */
class ProveedoresTable extends Table
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

        $this->table('proveedores');
        $this->displayField('id');
        $this->primaryKey('id');
        
        $this->hasMany('Categorias_proveedor', [
            'foreignKey' => 'proveedor_categoria'
        ]);
        
        $this->hasMany('Fotos_proveedor', [
            'foreignKey' => 'id_Proveedor'
        ]);
        
        $this->hasMany('Contactos_proveedor', [
            'foreignKey' => 'id_Proveedor'
        ]);
        
        $this->hasMany('Favoritos', [
            'foreignKey' => 'proveedor_favorito',
            'joinType' => 'INNER'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->integer('puntajeGlobal')
            ->requirePresence('puntajeGlobal', 'create')
            ->notEmpty('puntajeGlobal');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->requirePresence('ubicacion', 'create')
            ->notEmpty('ubicacion');

        $validator
            ->numeric('latitud')
            ->requirePresence('latitud', 'create')
            ->notEmpty('latitud');

        $validator
            ->numeric('longitud')
            ->requirePresence('longitud', 'create')
            ->notEmpty('longitud');

        $validator
            ->allowEmpty('logo');

        return $validator;
    }
}
