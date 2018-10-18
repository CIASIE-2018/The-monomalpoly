<?php
include('GameCell.php');

class Game{
	//private $listeCouleur = ['red','yellow','orange','blue','green','grey']; 

	private $listPlayer;
	private $board;
	private $timer;
	public $maxX;
	public $maxY;

	function Game(){
		$this->listPlayer = [];
		$this->timer = new Timer();


		//List of the different Cells in the boardn with their position on x
		$listCell = [
			new GameCell("Start",1),
			new GameCell("unknow",2),
			new GameCell("unknow",3),
			new GameCell("unknow",4),
			new GameCell("Kimsufi",5),
			new GameCell("Hadopi 100",6),
			new GameCell("unknow",7),
			new GameCell("unknow",8),
			new GameCell("unknow",9),
			new GameCell("Network 56K",10),
			new GameCell("unknow",11),
			new GameCell("unknow",12),
			new GameCell("unknow",13),
			new GameCell("1&1",14),
			new GameCell("Hadopi 200",15),
			new GameCell("unknow",16),
			new GameCell("unknow",17),
			new GameCell("unknow",18),
			new GameCell("E3",19),
			new GameCell("unknow",20),
			new GameCell("unknow",21),
			new GameCell("unknow",22),
			new GameCell("Ikoula",23),
			new GameCell("Hadopi 300",24),
			new GameCell("unknow",25),
			new GameCell("unknow",26),
			new GameCell("unknow",27),
			new GameCell("Internet Shutdown",28),
			new GameCell("unknow",29),
			new GameCell("unknow",30),
			new GameCell("unknow",31),
			new GameCell('OVH', 32),
			new GameCell("unknow",33),
			new GameCell("unknow",34),
			new GameCell("Hadopi 400",35),
			new GameCell("unknow",36)
		];


		/* Initialisation du plateau (liste de GameCels)*/
		for($i = 0 ;$i<$listCell.length(); $i++){
			$this->board.add($listCell[$i]);
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

	function startCell($player){
		if(!$player.getPenalty()){
			if($player.getBonus() == 'Parrain'){
				$player.addBitcoins(300);
			}
			else{
				$player.addBitcoins(200);
			}
		}
	}


}
?>