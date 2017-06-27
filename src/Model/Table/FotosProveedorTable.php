<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FotosProveedor Model
 *
 * @method \App\Model\Entity\FotosProveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\FotosProveedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FotosProveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FotosProveedor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FotosProveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FotosProveedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FotosProveedor findOrCreate($search, callable $callback = null, $options = [])
 */
class FotosProveedorTable extends Table
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

        $this->table('fotos_proveedor');
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
            ->allowEmpty('foto');

        return $validator;
    }
}
