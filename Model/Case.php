<?php
class Case{
	private $type;
	private $nom;
	private $listeJoueurs;
	private $x;
	private $y;

	public Case($nom,$x,$y){
		$this->listeJoueur = [];
		$this->nom = $nom;
		$this->x = $x;
		$this->y = $y;
	}

	public getPlayersIn(){
		return $this->listeJoueurs;
	}
}
?>