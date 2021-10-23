<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JdetJournalDetail Model
 *
 * @method \App\Model\Entity\JdetJournalDetail newEmptyEntity()
 * @method \App\Model\Entity\JdetJournalDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\JdetJournalDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JdetJournalDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\JdetJournalDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\JdetJournalDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JdetJournalDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\JdetJournalDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JdetJournalDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JdetJournalDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\JdetJournalDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\JdetJournalDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\JdetJournalDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class JdetJournalDetailTable extends Table
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

        $this->setTable('jdet_journal_detail');
        $this->setDisplayField('jdet_codigo');
        $this->setPrimaryKey('jdet_codigo');
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
            ->allowEmptyString('jdet_codigo', null, 'create');

        $validator
            ->requirePresence('jdet_jour_codigo', 'create')
            ->notEmptyString('jdet_jour_codigo');

        $validator
            ->scalar('jdet_property')
            ->maxLength('jdet_property', 100)
            ->requirePresence('jdet_property', 'create')
            ->notEmptyString('jdet_property');

        $validator
            ->scalar('jdet_prop_key')
            ->maxLength('jdet_prop_key', 100)
            ->requirePresence('jdet_prop_key', 'create')
            ->notEmptyString('jdet_prop_key');

        $validator
            ->scalar('jdet_old_value')
            ->requirePresence('jdet_old_value', 'create')
            ->notEmptyString('jdet_old_value');

        $validator
            ->scalar('jdet_value')
            ->requirePresence('jdet_value', 'create')
            ->notEmptyString('jdet_value');

        return $validator;
    }
}
