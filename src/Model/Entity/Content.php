<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

Class Content extends Entity {
    protected $_accessible = [
        '*' => 'true',
        'id' => false
    ];

}


?>