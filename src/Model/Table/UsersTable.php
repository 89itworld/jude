<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('id');
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
                    'message' => 'The email you provided is already taken. Please provide another one.',
                    'rule' => 'validateUnique', 'provider' => 'table',
                ],
            ]);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password', 'Password is required')
            ->add('password', [
                'length' => [
                    'rule' => ['minLength', 6],
                    'message' => 'Minimum 6 characters required.',
                ],
        ]);

        $validator
            ->requirePresence('user_type', 'create')
            ->notEmpty('user_type');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');
        
       /* $validator
            ->requirePresence('cpassword', 'create', 'Password must be required!')
            ->notEmpty('cpassword', 'Confirm password must be required!')
            ->add(
                'cpassword',
                'custom',
                [
                    'rule' => function ($value, $context) {
                        if (isset($context['data']['password']) && $value == $context['data']['password']) {
                            return true;
                        }
                        return false;
                    },
                    'message' => 'Sorry, password and confirm password does not matched'
                ]
            );*/

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
        $rules->add($rules->isUnique(['fname']));
        return $rules;
    }
}
