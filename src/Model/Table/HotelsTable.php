<?php
namespace App\Model\Table;

use App\Model\Entity\Hotel;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hotels Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ExpediaHotels
 * @property \Cake\ORM\Association\HasMany $HotelAddresses
 * @property \Cake\ORM\Association\HasMany $HotelPrices
 */
class HotelsTable extends Table
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

        $this->table('hotels');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasOne('HotelAddresses', [
            'foreignKey' => 'hotel_id'
        ]);
        $this->hasOne('HotelPrices', [
            'foreignKey' => 'hotel_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('expedia_link', 'create')
            ->notEmpty('expedia_link');

        $validator
            ->add('review', 'valid', ['rule' => 'decimal'])
            ->requirePresence('review', 'create')
            ->notEmpty('review');

        $validator
            ->add('total_review', 'valid', ['rule' => 'decimal'])
            ->requirePresence('toal_review', 'create')
            ->notEmpty('toal_review');

        $validator
            ->requirePresence('image_url', 'create')
            ->notEmpty('image_url');

        $validator
            ->add('star_rating', 'valid', ['rule' => 'numeric'])
            ->requirePresence('star_rating', 'create')
            ->notEmpty('star_rating');

        $validator
            ->requirePresence('free_parking', 'create')
            ->notEmpty('free_parking');

        $validator
            ->requirePresence('free_breakfast', 'create')
            ->notEmpty('free_breakfast');

        $validator
            ->requirePresence('Free_internet', 'create')
            ->notEmpty('Free_internet');

        $validator
            ->requirePresence('remaining_count', 'create')
            ->notEmpty('remaining_count');

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
        return $rules;
    }
}
