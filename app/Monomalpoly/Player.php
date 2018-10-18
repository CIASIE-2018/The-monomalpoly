<?php
class Player{
	private $id;
	private $name;
	private $color;
	private $posX;
	private $nbDisk;
	private $listServer;
	private $penalty;
	private $piece;
	private $bitcoins;

	function Player($id,$name,$color){
		$this->posX = 0;
		$this->nbDisk = 0;
		$this->listServer = [];

		$this->id = $id;
		$this->name = $name;
		$this->color = $color;
		$this->penalty = false;
		$this->piece = new Piece($color);
		$this->bitcoins = 1500;
		
	}

	function move(){
		$moveNb = random_int(1,6) + random_int(1,6);//first and second dice roll results;

		if($this->penalty != true){
			$this->posX += $moveNb;
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

	/*function selectNewCard(){

	}*/

	function setId($id){
		$this->id = $id;
	}
}
?>