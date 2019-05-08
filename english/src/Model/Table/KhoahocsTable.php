<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Khoahocs Model
 *
 * @method \App\Model\Entity\Khoahoc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Khoahoc newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Khoahoc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Khoahoc|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Khoahoc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Khoahoc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Khoahoc[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Khoahoc findOrCreate($search, callable $callback = null, $options = [])
 */
class KhoahocsTable extends Table
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

        $this->setTable('khoahocs');
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
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->integer('price')
            ->allowEmptyString('price');

        $validator
            ->integer('quantityLesson')
            ->requirePresence('quantityLesson', 'create')
            ->allowEmptyString('quantityLesson', false);

        $validator
            ->integer('id_category')
            ->requirePresence('id_category', 'create')
            ->allowEmptyString('id_category', false);

        return $validator;
    }
}
