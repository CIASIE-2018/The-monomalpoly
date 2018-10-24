<?php

namespace App\Monomalpoly;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    private $id;
	private $name;
	private $color;
	private $posX;
	private $nbDisk;
	private $listServer;
	private $penalty;
	private $piece;
	private $bitcoins;
	private $bonus;

	function __construct($id,$name,$color){
		$this->posX = 0;
		$this->listServer = [];

		$this->id = $id;
		$this->name = $name;
		$this->color = $color;
		$this->penalty = false;
		$this->piece = new Piece($color);
		$this->bitcoins = 1500;

		$b = random_int(0,5);
		$bonus = ['Host','Hacker','Producter','Parrain','Runner','GoodLoser'];
		$this->bonus = $bonus[$b];
		if($this->bonus == 'Host'){
			$this->nbDisk = 3;
		}
		else{
			$this->nbDisk = 0;
		}
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

	/*function selectNewCard(){

	}*/

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
}
