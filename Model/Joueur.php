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