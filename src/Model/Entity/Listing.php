<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

Class Listing extends Entity {
    protected $_accessible = [
        '*' => 'true',
        'id' => false
    ];

}

