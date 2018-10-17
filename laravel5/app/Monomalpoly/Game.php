<?php
include('GameCell.php');

class Game{
	//private $listeCouleur = ['red','yellow','orange','blue','green','grey'];  
	private $listCell = [];
	private $listPlayer;
	private $board;
	private $timer;
	public $maxX;
	public $maxY;

	function Game(){
		$this->listPlayer = [];
		$this->timer = new Timer();

		$ind = 0; //variable to know where we're at in 

		/* Initialisation du plateau (liste de cases)*/
		for($i = 0 ;$i<=$maxX; $i++){
			/* Systeme pour l'affichage en x/y */
			$this->board.add(new GameCell($listCell[$i],$x,0));
			$ind++;
		}

		for($j = 0 ;$i<=$maxY; $i++){
			$this->board.add(new GameCell($listCell[$i],$x,0));
		}
	}

	function join(){
		//On créé un nouveau joueur
		$listePlayer.add(new Players($_SESSION['id'],$_SESSION['nom'],$listeCouleur[$listePlayer.length()]));
	}

	function checkNbPlayer(){
		if($listeJoueur.length()<2){
			restartTimer();
		}
	}
}
?>