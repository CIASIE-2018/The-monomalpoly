<?php
class Players{
	private $id;
	private $nom;
	private $couleur;
	private $posX;
	private $posY;
	private $nbDisque;
	private $listeServeur;

	function Players($id,$nom,$couleur){
		$this->posX = 0;
		$this->posY = 0;
		$this->nbDisque = 0;
		$this->listeServeur = [];

		$this->id = $id;
		$this->nom = $nom;
		$this->couleur = $couleur;
		
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

	function getNom(){
		return $this->nom;
	}
}
?>