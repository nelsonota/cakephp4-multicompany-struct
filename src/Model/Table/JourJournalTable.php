<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JourJournal Model
 *
 * @method \App\Model\Entity\JourJournal newEmptyEntity()
 * @method \App\Model\Entity\JourJournal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\JourJournal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JourJournal get($primaryKey, $options = [])
 * @method \App\Model\Entity\JourJournal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\JourJournal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JourJournal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\JourJournal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JourJournal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JourJournal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\JourJournal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\JourJournal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\JourJournal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class JourJournalTable extends Table
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

        $this->setTable('jour_journal');
        $this->setDisplayField('jour_codigo');
        $this->setPrimaryKey('jour_codigo');
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
            ->allowEmptyString('jour_codigo', null, 'create');

        $validator
            ->scalar('jour_model')
            ->maxLength('jour_model', 100)
            ->requirePresence('jour_model', 'create')
            ->notEmptyString('jour_model');

        $validator
            ->requirePresence('jour_model_codigo', 'create')
            ->notEmptyString('jour_model_codigo');

        $validator
            ->requirePresence('jour_json_data', 'create')
            ->notEmptyString('jour_json_data');

        $validator
            ->dateTime('jour_created')
            ->requirePresence('jour_created', 'create')
            ->notEmptyDateTime('jour_created');

        $validator
            ->requirePresence('jour_usua_codigo', 'create')
            ->notEmptyString('jour_usua_codigo');

        $validator
            ->requirePresence('jour_empr_codigo', 'create')
            ->notEmptyString('jour_empr_codigo');

        return $validator;
    }
}
