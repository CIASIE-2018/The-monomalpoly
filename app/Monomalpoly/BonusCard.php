<?php

namespace App\Monomalpoly;

use Illuminate\Database\Eloquent\Model;

class BonusCard extends Model
{
    private $name;
    private $description;

    function __construct($nam,$desc){
        $this->name=$nam;
        $this->description=$desc;
    }

    function getName(){
        return $this->name;
    }

    function getDescription(){
        return $this->getDescription;
    }

}
?>