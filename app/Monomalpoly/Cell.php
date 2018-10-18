<?php

class Cell {
    private $position;
    private $type;
    private $name;
    private $color;
    private $listPlayer = [];
    private $disks = 

    public function _construct($position, $type, $name, $color) {
        $this->position = $position;
        $this->type = $type;
        $this->name = $name;
        $this->color = $color;
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

}