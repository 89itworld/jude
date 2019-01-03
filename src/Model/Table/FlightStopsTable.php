<?php
namespace App\Model\Table;

use App\Model\Entity\FlightStop;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FlightStops Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Flights
 */
class FlightStopsTable extends Table
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

        $this->table('flight_stops');
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
            ->add('departure_time', 'valid', ['rule' => 'datetime'])
            ->requirePresence('departure_time', 'create')
            ->notEmpty('departure_time');

        $validator
            ->add('arrival_time', 'valid', ['rule' => 'datetime'])
            ->requirePresence('arrival_time', 'create')
            ->notEmpty('arrival_time');

        $validator
            ->requirePresence('arrival_code', 'create')
            ->notEmpty('arrival_code');

        $validator
            ->requirePresence('arrival_location', 'create')
            ->notEmpty('arrival_location');

        $validator
            ->requirePresence('departure_code', 'create')
            ->notEmpty('departure_code');

        $validator
            ->requirePresence('departure_location', 'create')
            ->notEmpty('departure_location');

        $validator
            ->requirePresence('airline_name', 'create')
            ->notEmpty('airline_name');

        $validator
            ->requirePresence('airline_code', 'create')
            ->notEmpty('airline_code');

        $validator
            ->add('flightNumber', 'valid', ['rule' => 'numeric'])
            ->requirePresence('flightNumber', 'create')
            ->notEmpty('flightNumber');

        $validator
            ->requirePresence('operating_airline', 'create')
            ->notEmpty('operating_airline');

        $validator
            ->add('distance', 'valid', ['rule' => 'numeric'])
            ->requirePresence('distance', 'create')
            ->notEmpty('distance');

        $validator
            ->requirePresence('distance_units', 'create')
            ->notEmpty('distance_units');

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
        $rules->add($rules->existsIn(['flights_id'], 'Flights'));
        return $rules;
    }
}
