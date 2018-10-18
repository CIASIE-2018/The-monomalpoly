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

		/* Initialisation du plateau (liste de cases)*/
		for($i = 0 ;$i<$listCell.length(); $i++){
			$this->board.add(new GameCell($listCell[$i],$i));
		}
	}

	function join(){
		//On créé un nouveau joueur
		$listePlayer.add(new Player($_SESSION['id'],$_SESSION['nom'],$listColor[$listePlayer.length()]));
	}

	function checkNbPlayer(){
		if($listeJoueur.length()<2){
			restartTimer();
		}
	}

	function getListPlayer(){
		return $this->listeJoueur;
	}
}
?>