<?php
namespace App\Model\Table;

use App\Model\Entity\UserSubscribe;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tours Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $TourImages
 */
class UserSubscribesTable extends Table
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

        $this->table('user_subscribes');
        $this->displayField('email');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
		
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('email', 'create')
            ->notEmpty('email', 'Email is required')
            ->add('email', [
                'valid'=>[
                    'rule' => 'email',
                    'message'=>'You must provide a valid email'
            ],
            'emailUnique' => [
                'message' => 'You have already Subscribed.',
                'rule' => 'validateUnique', 'provider' => 'table',
            ],
            ]);
			
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
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
