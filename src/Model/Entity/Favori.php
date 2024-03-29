<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

Class Favori extends Entity {
    protected $_accessible = [
        '*' => 'true',
        'id' => false
    ];

}


?>