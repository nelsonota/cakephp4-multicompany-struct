<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsuaUsuario Model
 *
 * @method \App\Model\Entity\UsuaUsuario newEmptyEntity()
 * @method \App\Model\Entity\UsuaUsuario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UsuaUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsuaUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsuaUsuario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UsuaUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsuaUsuario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsuaUsuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsuaUsuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsuaUsuario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsuaUsuario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsuaUsuario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsuaUsuario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsuaUsuarioTable extends AppTable
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('usua_usuario');
        $this->setDisplayField('usua_codigo');
        $this->setPrimaryKey('usua_codigo');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->allowEmptyString('usua_codigo', null, 'create');

        $validator
            // ->requirePresence('usua_clie_codigo', 'create')
            ->notEmptyString('usua_clie_codigo');

        $validator
            ->scalar('usua_email')
            ->maxLength('usua_email', 128)
            ->requirePresence('usua_email', 'create')
            ->notEmptyString('usua_email')
            ->add('usua_email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('usua_senha')
            ->maxLength('usua_senha', 255)
            ->requirePresence('usua_senha', 'create')
            ->notEmptyString('usua_senha');

        $validator
            ->scalar('usua_nome')
            ->maxLength('usua_nome', 60)
            ->requirePresence('usua_nome', 'create')
            ->notEmptyString('usua_nome');

        $validator
            ->dateTime('usua_created')
            ->requirePresence('usua_created', 'create')
            ->notEmptyDateTime('usua_created');

        $validator
            ->dateTime('usua_modified')
            ->allowEmptyDateTime('usua_modified');

        $validator
            ->dateTime('usua_deleted')
            ->allowEmptyDateTime('usua_deleted');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['usua_email']), ['errorField' => 'usua_email']);

        return $rules;
    }
}
