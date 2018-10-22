<?php

namespace App\Monomalpoly;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    private $listeCouleur = ['red','yellow','orange','blue','green','grey']; 

	private $listPlayer;
	private $board;
	private $timer;
	public $maxX;
	public $maxY;

	function Game(){
		$this->listPlayer = [];
		$this->timer = new Timer();


		//List of the different Cells in the board with their position on x
		$listCell = [
			new GameCell("Start",0,"start"),
			new GameCell("unknow",1,"purchasable"),
			new GameCell("unknow",2,"bonus"),
			new GameCell("unknow",3,"purchasable"),
			new GameCell("Kimsufi",4,"host"),
			new GameCell("Hadopi 100",5,"purchasable"),
			new GameCell("unknow",6,"purchasable"),
			new GameCell("unknow",7,"bonus"),
			new GameCell("unknow",8,"purchasable"),
			new GameCell("Network 56K",9,"jail"),
			new GameCell("unknow",10,"purchasable"),
			new GameCell("unknow",11,"bonus"),
			new GameCell("unknow",12,"purchasable"),
			new GameCell("1&1",13,"host"),
			new GameCell("Hadopi 200",14,"purchasable"),
			new GameCell("unknow",15,"purchasable"),
			new GameCell("unknow",16,"bonus"),
			new GameCell("unknow",17,"purchasable"),
			new GameCell("E3",18,"boost"),
			new GameCell("unknow",19,"purchasable"),
			new GameCell("unknow",20,"bonus"),
			new GameCell("unknow",21,"purchasable"),
			new GameCell("Ikoula",22,"host"),
			new GameCell("Hadopi 300",23,"purchasable"),
			new GameCell("unknow",24,"purchasable"),
			new GameCell("unknow",25,"bonus"),
			new GameCell("unknow",26,"purchasable"),
			new GameCell("Internet Shutdown",27,"go to jail"),
			new GameCell("unknow",28,"purchasable"),
			new GameCell("unknow",29,"bonus"),
			new GameCell("unknow",30,"purchasable"),
			new GameCell('OVH', 31,"host"),
			new GameCell("unknow",32,"bonus"),
			new GameCell("unknow",33,"purchasable"),
			new GameCell("Hadopi 400",34,"host"),
			new GameCell("unknow",35,"purchasable")
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

	function getListPlayer(){
		return $this->listeJoueur;
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

	function bonusCard(){
		if()
	}
}
