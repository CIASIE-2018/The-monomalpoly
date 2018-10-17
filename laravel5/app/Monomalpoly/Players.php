<?php
class Players{
	private $id;
	public $name;
	private $color;
	private $posX;
	private $posY;
	private $nbDisk;
	private $listServer;

	function Players($id,$nom,$color){
		$this->posX = 0;
		$this->posY = 0;
		$this->nbDisk = 0;
		$this->listServer = [];

		$this->id = $id;
		$this->nom = $nom;
		$this->color = $color;
		
	}

	function move(){
		$moveNb = random_int(1,6) + random_int(1,6);//first and second dice roll results;
		$x = $this->posX;
		$y = $this->posY;

		$penalty = testPenalty($x,$y); //test if we have a penalty, like being in jail, if so we cannot move, return a boolean;
		$movementDone = false; //boolean to know if there is no more movement to do;

		if($penalty != true && $movementDone == false){
			if($x == 0 && $y < $maxY){ 
				if($y + $move > $maxY){
					$move = $maxY - $y;
					$y = $maxY;
				}
				else{
					$y += $move;
					$movementDone = true;
				}
			}
			if($y == $maxY && $x < $maxX){
				if($x + $move > $maxX){
					$move = $maxX - $x;
					$x = $maxX;
				}
				else{
					$x += $move;
					$movementDone = true;
				}
			}
			if($x == 10 && $y <= $maxY){
				if($y - $move < 0){
					$move = $maxY - $y;
					$y = 0;
				}
				else{
					$y -= $move;
					$movementDone = true;
				}
			}
			if($y == 0 && $x <= $maxX){
				if($x - $move < 0){
					$move = $maxX - $x;
					$x = 0;
				}
				else{
					$x -= $move;
					$movementDone = true;
				}
			}
		}


		
		if(!$canMove){
			throw new Exception("Some message");
		}
	}

	function selectNewCard(){

	}

	function setId($id){
		$this->id = $id;
	}
}
?>