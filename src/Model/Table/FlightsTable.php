<?php
namespace App\Model\Table;

use App\Model\Entity\Flight;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flights Model
 *
 * @property \Cake\ORM\Association\HasMany $FlightPrices
 */
class FlightsTable extends Table
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

        $this->table('flights');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasOne('FlightPrices', [
            'foreignKey' => 'flight_id'
        ]);

        $this->hasMany('FlightStops', [
            'foreignKey' => 'flight_id'
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
            ->requirePresence('expedia_legId', 'create')
            ->notEmpty('expedia_legId');

        $validator
            ->add('departure_time', 'valid', ['rule' => 'datetime'])
            ->requirePresence('departure_time', 'create')
            ->notEmpty('departure_time');

        $validator
            ->add('arrival_time', 'valid', ['rule' => 'datetime'])
            ->requirePresence('arrival_time', 'create')
            ->notEmpty('arrival_time');

        $validator
            ->requirePresence('arrival_location', 'create')
            ->notEmpty('arrival_location');

        $validator
            ->requirePresence('arrival_code', 'create')
            ->notEmpty('arrival_code');

        $validator
            ->requirePresence('departure_location', 'create')
            ->notEmpty('departure_location');

        $validator
            ->requirePresence('departure_code', 'create')
            ->notEmpty('departure_code');

        $validator
            ->add('seats_remaining', 'valid', ['rule' => 'numeric'])
            ->requirePresence('seats_remaining', 'create')
            ->notEmpty('seats_remaining');

        return $validator;
    }
}
