<?php

class CaseDeJeux
{
	private $type;
	private $nom;
	private $listeJoueurs;
	private $x;
	private $y;

	public function Case($nom,$x,$y){
		$this->listeJoueur = [];
		$this->nom = $nom;
		$this->x = $x;
		$this->y = $y;
	}

	public function getPlayersIn(){
		return $this->listeJoueurs;
	}
}
?>