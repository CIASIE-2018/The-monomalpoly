<?php

namespace App\Monomalpoly;

use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    //Position of the cell
    private $position;
    //Type of the cell
    private $type;
    //Name of the cell
    private $name;
    //Color of the cell
    private $color;
    //List of players on the cell
    private $listPlayer;
    //Owner of the cell
    private $owner;
    //Number of disks on the cell
    private $disks;
    //Price of the cell
    private $price;

    public function __construct($name, $position, $type) {
        $this->position = $position;
        $this->type = $type;
        $this->name = $name;
        $this->color = null;
        $this->listPlayer = [];
        $this->owner = new Player(0, 'Personne', '#000000');
        $this->disks = 0;
    }

    public function AddPlayer($player) {
        if(is_object($player) and is_a($player, 'Player')) {
            $this->listPlayer[$player.getName()] = $player;  
        }
    }

    public function RemovePlayer($player) {
        if(is_object($player) and is_a($player, 'Player')) {
            unset($this->listPlayer[$player]);   
        }
    }

    public function AddDisk($player, $number) {
        if($this->type == 'purchasable') {
            $this->onwer = $player;
            $this->disks += $number;
        }
    }


    /**
     * Get the value of disks
     */ 
    public function getDisks()
    {
        return intval($this->disks);
    }

    /**
     * Get the value of listPlayer
     */ 
    public function getListPlayer()
    {
        return $this->listPlayer;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of position
     */ 
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        if(isset($this->disks)) {
            foreach ($variable as $key => $value) {
                return $this->price * (1.5 * $this->disks[$key]);
            } 
        }
        return $this->price;
    }

    /**
     * Get the value of owner
     */ 
    public function getOwner()
    {
        return $this->owner;
    }
}
