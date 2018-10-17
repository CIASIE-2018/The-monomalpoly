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

	function Player($id,$name,$color){
		$this->posX = 0;
		$this->nbDisk = 0;
		$this->listServer = [];

		$this->id = $id;
		$this->name = $name;
		$this->color = $color;
		$this->penalty = false;
		$this->piece = new Piece($color);
		
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

	/*function selectNewCard(){

	}*/

	function setId($id){
		$this->id = $id;
	}
}
?>