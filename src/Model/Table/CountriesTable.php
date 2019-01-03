<?php
namespace App\Model\Table;

use App\Model\Entity\Country;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Countries Model
 *
 */
class CountriesTable extends Table
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

        $this->table('countries');
        $this->displayField('Name');
        $this->primaryKey('Code');

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
            ->allowEmpty('Code', 'create');

        $validator
            ->requirePresence('Name', 'create')
            ->notEmpty('Name');

        $validator
            ->requirePresence('Continent', 'create')
            ->notEmpty('Continent');

        $validator
            ->requirePresence('Region', 'create')
            ->notEmpty('Region');

        $validator
            ->add('SurfaceArea', 'valid', ['rule' => 'numeric'])
            ->requirePresence('SurfaceArea', 'create')
            ->notEmpty('SurfaceArea');

        $validator
            ->add('IndepYear', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('IndepYear');

        $validator
            ->add('Population', 'valid', ['rule' => 'numeric'])
            ->requirePresence('Population', 'create')
            ->notEmpty('Population');

        $validator
            ->add('LifeExpectancy', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('LifeExpectancy');

        $validator
            ->add('GNP', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('GNP');

        $validator
            ->add('GNPOld', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('GNPOld');

        $validator
            ->requirePresence('LocalName', 'create')
            ->notEmpty('LocalName');

        $validator
            ->requirePresence('GovernmentForm', 'create')
            ->notEmpty('GovernmentForm');

        $validator
            ->allowEmpty('HeadOfState');

        $validator
            ->add('Capital', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('Capital');

        $validator
            ->requirePresence('Code2', 'create')
            ->notEmpty('Code2');

        return $validator;
    }
}
