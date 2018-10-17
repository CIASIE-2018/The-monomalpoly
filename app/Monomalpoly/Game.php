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
			$this->plateau.add(new CaseDeJeux($listeNomCase[$i],$x,0));
		}
		for($j = 0 ;$i<=$maxY; $i++){
			$this->plateau.add(new CaseDeJeux($listeNomCase[$i],$x,0));
		}
	}

	function join(){
		//On créé un nouveau joueur
		$listeJoueur.add(new Joueur($_SESSION['id'],$_SESSION['nom'],$listeCouleur[$listeJoueur.length()]));
	}

	function checkNbJoueur(){
		if($listeJoueur.length()<2){
			restartTimer();
		}
	}
}
?>