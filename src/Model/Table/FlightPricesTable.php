<?php
namespace App\Model\Table;

use App\Model\Entity\FlightPrice;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FlightPrices Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Flights
 */
class FlightPricesTable extends Table
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

        $this->table('flight_prices');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Flights', [
            'foreignKey' => 'flight_id',
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('flight_legId', 'create')
            ->notEmpty('flight_legId');

        $validator
            ->requirePresence('base_price', 'create')
            ->notEmpty('base_price');

        $validator
            ->requirePresence('formatted_base_price', 'create')
            ->notEmpty('formatted_base_price');

        $validator
            ->requirePresence('total_price', 'create')
            ->notEmpty('total_price');

        $validator
            ->requirePresence('formatted_total_price', 'create')
            ->notEmpty('formatted_total_price');

        $validator
            ->requirePresence('taxes_price', 'create')
            ->notEmpty('taxes_price');

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
        $rules->add($rules->existsIn(['flight_id'], 'Flights'));
        return $rules;
    }
}
