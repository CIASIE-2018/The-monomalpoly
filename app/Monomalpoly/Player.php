<?php

namespace App\Monomalpoly;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	//id associate to player
	private $id;
	//name of player
	private $name;
	//position of player in the board
	private $posX;
	//List of servers (house) owned by the player
	private $listServer;
	//List of language (street) owned by the player
	private $listLanguage;
	//Initialize if the player has obtained a penalty
	private $penalty;
	//piece associate to player
	private $piece;
	//Number of bitcoin (money) owned by the player
	private $bitcoins;
	//Initialized in the constructor
	private $bonus;

	function __construct($id,$name,$color){
		$this->posX = 0;
		$this->listServer = [];
		$this->listLanguage = [];

		$this->id = $id;
		$this->name = $name;
		$this->penalty = false;
		$this->bitcoins = 1500;

		$bonusdice = random_int(0,5);
		$bonus = ['Host','Hacker','Producter','Parrain','Runner','GoodLoser'];
		$this->bonus = $bonus[$bonusdice];
		if($this->bonus == 'Host'){
			$this->nbDisk = 3;
		}
		else{
			$this->nbDisk = 0;
		}
		$this->piece = new Piece($this, $color);
	}

	function move(){
		$moveNb = random_int(1,6) + random_int(1,6);//first and second dice roll results;

		if($this->penalty != true){
			if($this->posX + $moveNb >35){
				$moveNb = 35 - $this->posX;
				$this->posX = $moveNb-1;	
			}
			else{
				$this->posX += $moveNb;
			}
			$this->piece.piecePosition($this->posX);
		}
		else{
			print("You cannot move!");
		}
	}

	function setPenalty($penal){
		$this->penalty = $penal;
	}

	function getPenalty(){
		return $this->penalty;
	}

	function addBitcoins($bit){
		$this->bitcoins += $bit;
	}
	function removeBitcoins($bit){
		if(($this->bitcoins - $bit) >= 0){
			$this->bitcoins -= $bit;
		}
		else{
			$this->bitcoins = 0;
		}
	}
	function getBitcoins(){
		return $this->bitcoins;
	}


	function getBonus(){
		return $this->bonus;
	}

	function setId($id){
		$this->id = $id;
	}

	/**
	 * Get the value of name
	 */ 
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the value of color
	 */ 
	public function getColor()
	{
		return $this->color;
	}

	/**
	 * Set the value of posX
	 *
	 */ 
	public function setPosX($posX)
	{
		$this->posX = $posX;
	}

	/**
	 * Get the value of posX
	 */ 
	public function getPosX()
	{
		return $this->posX;
	}

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}
