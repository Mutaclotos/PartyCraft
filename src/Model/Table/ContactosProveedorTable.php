<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactosProveedor Model
 *
 * @method \App\Model\Entity\ContactosProveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContactosProveedor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ContactosProveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactosProveedor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactosProveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContactosProveedor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactosProveedor findOrCreate($search, callable $callback = null, $options = [])
 */
class ContactosProveedorTable extends Table
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

        $this->table('contactos_proveedor');
        $this->displayField('id_proveedor');
        $this->primaryKey('id_proveedor');
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
            ->allowEmpty('id_proveedor', 'create');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->requirePresence('contacto', 'create')
            ->notEmpty('contacto');

        return $validator;
    }
}
