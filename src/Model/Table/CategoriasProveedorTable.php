<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriasProveedor Model
 *
 * @method \App\Model\Entity\CategoriasProveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriasProveedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategoriasProveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasProveedor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasProveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasProveedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasProveedor findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriasProveedorTable extends Table
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

        $this->table('categorias_proveedor');
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
            ->integer('id_proveedor')
            ->requirePresence('id_proveedor', 'create')
            ->notEmpty('id_proveedor');

        $validator
            ->requirePresence('categoria', 'create')
            ->notEmpty('categoria');

        return $validator;
    }
}
