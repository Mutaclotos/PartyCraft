<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comentarios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 * @property \Cake\ORM\Association\BelongsTo $Proveedores
 *
 * @method \App\Model\Entity\Comentario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comentario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Comentario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comentario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comentario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comentario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comentario findOrCreate($search, callable $callback = null, $options = [])
 */
class ComentariosTable extends Table
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

        $this->table('comentarios');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Proveedores', [
            'foreignKey' => 'proveedor_id',
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
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->integer('puntaje')
            ->requirePresence('puntaje', 'create')
            ->notEmpty('puntaje');

        $validator
            ->requirePresence('contenido', 'create')
            ->notEmpty('contenido');

        $validator
            ->integer('likes')
            ->requirePresence('likes', 'create')
            ->notEmpty('likes');

        $validator
            ->integer('dislikes')
            ->requirePresence('dislikes', 'create')
            ->notEmpty('dislikes');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['proveedor_id'], 'Proveedores'));

        return $rules;
    }
}
