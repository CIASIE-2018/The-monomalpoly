<?php
class Player{
	private $id;
	public $name;
	private $color;
	private $posX;
	private $posY;
	private $nbDisk;
	private $listServer;

	function Player($id,$name,$color){
		$this->posX = 0;
		$this->posY = 0;
		$this->nbDisk = 0;
		$this->listServer = [];

		$this->id = $id;
		$this->name = $name;
		$this->color = $color;
		
	}

	function move(){
		$moveNb = random_int(1,6) + random_int(1,6);//first and second dice roll results;
		$x = $this->posX;
		$y = $this->posY;

		$penalty = testPenalty($x,$y); //test if we have a penalty, like being in jail, if so we cannot move, return a boolean;
		$movementDone = false; //boolean to know if there is no more movement to do;

		if($penalty != true && $movementDone == false){
			if($x == 0 && $y < $maxY){ //movement on the y axis at x = 0
				if($y + $move > $maxY){
					$move = $maxY - $y;
					$y = $maxY;
				}
				else{
					$y += $move;
					$movementDone = true;
				}
			}
			if($y == $maxY && $x < $maxX){//movement on the x axis at y = maxY
				if($x + $move > $maxX){
					$move = $maxX - $x;
					$x = $maxX;
				}
				else{
					$x += $move;
					$movementDone = true;
				}
			}
			if($x == $maxX && $y <= $maxY){//movement on the y axis at x = maxX
				if($y - $move < 0){
					$move = $maxY - $y;
					$y = 0;
				}
				else{
					$y -= $move;
					$movementDone = true;
				}
			}
			if($y == 0 && $x <= $maxX){//movement on the x axis at y = 0
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
	}

	function selectNewCard(){

	}

	function setId($id){
		$this->id = $id;
	}
}
?>