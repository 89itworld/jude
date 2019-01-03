<?php
namespace App\Model\Table;

use App\Model\Entity\HotelPrice;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HotelPrices Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Hotels
 */
class HotelPricesTable extends Table
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

        $this->table('hotel_prices');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Hotels', [
            'foreignKey' => 'hotel_id',
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
            ->add('base_price', 'valid', ['rule' => 'decimal'])
            ->requirePresence('base_price', 'create')
            ->notEmpty('base_price');

        $validator
            ->add('taxrc_fees', 'valid', ['rule' => 'decimal'])
            ->requirePresence('taxrc_fees', 'create')
            ->notEmpty('taxrc_fees');

        $validator
            ->add('total_price', 'valid', ['rule' => 'decimal'])
            ->requirePresence('total_price', 'create')
            ->notEmpty('total_price');

        $validator
            ->requirePresence('currency', 'create')
            ->notEmpty('currency');

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
        $rules->add($rules->existsIn(['hotel_id'], 'Hotels'));
        return $rules;
    }
}
