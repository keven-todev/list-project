<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class ContentsTable extends Table{

    public function initialize(array $config): void{
        parent::initialize($config);

        $this->addBehavior('timestamp');


        

    }

    public function validationDefault(Validator $validator): Validator
    {
       $validator 
       ->maxLength('pseudo', 20)
       ->notEmptyString('pseudo');


       $validator
       ->maxLength('password', 250)
       ->notEmptyString('password');

       return $validator;
    }
}


?>