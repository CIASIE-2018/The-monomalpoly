<?php
include('GameCell.php');

class Game{
	//private $listeCouleur = ['red','yellow','orange','blue','green','grey'];  
	private $listeNomCase = [];
	private $listeJoueur;
	private $plateau;
	private $timer;
	public $maxX;
	public $maxY;

	function Game(){
		$this->listeJoueur = [];
		$this->timer = new Timer();

		$ind = 0; //variable to know

		/* Initialisation du plateau (liste de cases)*/
		for($i = 0 ;$i<=$maxX; $i++){
			/* Systeme pour l'affichage en x/y */
			$this->plateau.add(new CaseDeJeux($listeNomCase[$i],$i,0));
		}
		for($j = 0 ;$j<=$maxY; $j++){
			$this->plateau.add(new CaseDeJeux($listeNomCase[$j],0,$j));
		}
	}

	function join($player){
		foreach ($listeJoueur as $value) {
			if($value.getId() != $player.getId()) {
				$listeJoueur.add($player);
			} 
		}
	}

	function checkNbJoueur(){
		if($listeJoueur.length()<2){
			restartTimer();
		}
	}

	function getListPlayer(){
		return $this->listeJoueur;
	}
}
?>