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
		for($i = 0 ;$i<$maxX; $i++){
			/* Systeme pour l'affichage en x/y */
			$this->board.add(new GameCell($listCell[$i],$i,0));//filling up the x axis with y at 0;
			$ind++;
		}
		for($j = 0 ;$j<$maxY; $j++){
			$ind++;
			$this->board.add(new GameCell($listCell[$ind],$maxX,$j));//filling up the y axis with x at maxX;
		}
		for($k = 0 ;$k<$maxX; $k++){
			$ind++;
			$this->board.add(new GameCell($listCell[$ind],$maxX-$k,$maxY));//filling up the x axis with y at maxY;
		}
		for($l = 0 ;$l<$maxY; $l++){
			$ind++;
			$this->board.add(new GameCell($listCell[$ind],0,$maxY-$l));//filling up the y axis with x at 0;
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