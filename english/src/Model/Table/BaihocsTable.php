<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Baihocs Model
 *
 * @method \App\Model\Entity\Baihoc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Baihoc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Baihoc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Baihoc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Baihoc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Baihoc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Baihoc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Baihoc findOrCreate($search, callable $callback = null, $options = [])
 */
class BaihocsTable extends Table
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

        $this->setTable('baihocs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->integer('times')
            ->allowEmptyString('times');

        $validator
            ->integer('id_course')
            ->requirePresence('id_course', 'create')
            ->allowEmptyString('id_course', false);

        return $validator;
    }
}
