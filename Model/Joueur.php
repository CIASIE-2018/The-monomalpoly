<?php
class Joueur{
	private $id;
	private $nom;
	private $couleur;
	private $position;
	private $nbDisque;
	private $listeServeur;

	public Joueur($id,$nom,$couleur){
		$this->position = 0;
		$this->nbDisque = 0;
		$this->listeServeur = [];

		$this->id = $id;
		$this->nom = $nom;
		$this->couleur = $couleur;
		
	}

	public move(){

	}

	public selectNewCard(){

	}

	public setId($id){
		$this->id = $id;
	}

	public getNom(){
		return $this->nom;
	}
}
?>