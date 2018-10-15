<?php
class Joueur{
	private $id;
	private $nom;
	private $couleur;
	private $position;
	private $nbDisque;
	private $listeServeur;

	function Joueur($id,$nom,$couleur){
		$this->position = 0;
		$this->nbDisque = 0;
		$this->listeServeur = [];

		$this->id = $id;
		$this->nom = $nom;
		$this->couleur = $couleur;
		
	}

	function move(){
		$firstDice = random_int(1,6);
		$secondDice = random_int(1,6);
		$moveNb = $firstDice + $secondDice;
		$canMove = testPosition($moveNb);
		if($canMove == true){
			$this->position += $moveNb;
		}
		//à finir 
	}

	function testPosition($move){
		
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