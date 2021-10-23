<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClieCliente Model
 *
 * @method \App\Model\Entity\ClieCliente newEmptyEntity()
 * @method \App\Model\Entity\ClieCliente newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ClieCliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClieCliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClieCliente findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ClieCliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClieCliente[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClieCliente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClieCliente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClieCliente[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ClieCliente[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ClieCliente[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ClieCliente[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClieClienteTable extends AppTable
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

        $this->setTable('clie_cliente');
        $this->setDisplayField('clie_codigo');
        $this->setPrimaryKey('clie_codigo');
        $this->hasMany('UsuaUsuario')->setForeignKey('usua_clie_codigo');
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
            ->allowEmptyString('clie_codigo', null, 'create');

        $validator
            ->scalar('clie_documento')
            ->maxLength('clie_documento', 14)
            ->requirePresence('clie_documento', 'create')
            ->notEmptyString('clie_documento')
            ->add('clie_documento', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('clie_razao_social')
            ->maxLength('clie_razao_social', 60)
            ->requirePresence('clie_razao_social', 'create')
            ->notEmptyString('clie_razao_social');

        $validator
            ->scalar('clie_token')
            ->maxLength('clie_token', 512)
            ->allowEmptyString('clie_token');

        $validator
            ->dateTime('clie_created')
            ->requirePresence('clie_created', 'create')
            ->notEmptyDateTime('clie_created');

        $validator
            ->dateTime('clie_modified')
            ->allowEmptyDateTime('clie_modified');

        $validator
            ->dateTime('clie_deleted')
            ->allowEmptyDateTime('clie_deleted');

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
        $rules->add($rules->isUnique(['clie_documento']), ['errorField' => 'clie_documento']);

        return $rules;
    }
}
