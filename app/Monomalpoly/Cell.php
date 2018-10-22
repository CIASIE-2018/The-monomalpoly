<?php

namespace App\Monomalpoly;

use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    private $position;
    private $type;
    private $name;
    private $color;
    private $listPlayer;
    private $disks;

    public function __construct($position, $type, $name, $color) {
        $this->position = $position;
        $this->type = $type;
        $this->name = $name;
        $this->color = $color;
        $this->listPlayer = [];
        $this->disks = [];
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
        if(is_object($player) and is_a($player, 'Player')) {
            $name = $player.getName();
            if(isset($disks[$name])){
                $this->disks[$name] += $number; 
            } else {
                foreach ($this->disks as $key => $value) {
                    unset($this->disks[$key]);
                }
                $this->disks[$name] = $number;
            }
        }
    }


    /**
     * Get the value of disks
     */ 
    public function getDisks()
    {
        return $this->disks;
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
}
