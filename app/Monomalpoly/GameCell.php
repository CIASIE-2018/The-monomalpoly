<?php

class GameCell
{
	private $type;
	private $nom;
	public $listeJoueurs;
	private $x;
	private $y;

	public function Case($nom,$x,$y){
		$this->listeJoueur = [];
		$this->nom = $nom;
		$this->x = $x;
		$this->y = $y;
	}
}
?>