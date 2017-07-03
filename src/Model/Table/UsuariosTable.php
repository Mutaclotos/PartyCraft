<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \Cake\ORM\Association\HasMany $Comentarios
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuariosTable extends Table
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

        $this->table('usuarios');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Comentarios', [
            'foreignKey' => 'usuario_comentario'
        ]);
        
        $this->hasMany('Favoritos', [
            'foreignKey' => 'usuario_favorito'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username', 'Rellene este campo')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
        
        $validator
            ->requirePresence('correo', 'create')
            ->notEmpty('correo', 'Rellene este campo')
            ->add('correo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('nombreReal', 'create')
            ->notEmpty('nombreReal', 'Rellene este campo');

        $validator
            ->requirePresence('contrasena', 'create')
            ->notEmpty('contrasena', 'Rellene este campo', 'create');

        $validator //TODO: CORRECT THIS MESS
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono', 'Rellene este campo');
            /*->add('reg_no', 'validFormat', [
                'rule' => ['custom', '/^\d{4}-?\d{4}$/gm'],
                'message' => 'Por favor ingrese un número de teléfono válido.']);*/

        $validator
            ->allowEmpty('fotoPerfil');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['correo']));

        return $rules;
    }
}
