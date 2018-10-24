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

	function __construct(){
		$this->listPlayer = [];
		//$this->timer = new Timer();


		//List of the different Cells in the board with their position on x
		$this->board = [
			new Cell("Start",0,"start"),
			new Cell("unknow",1,"purchasable"),
			new Cell("unknow",2,"bonus"),
			new Cell("unknow",3,"purchasable"),
			new Cell("Kimsufi",4,"host"),
			new Cell("Hadopi 100",5,"purchasable"),
			new Cell("unknow",6,"purchasable"),
			new Cell("unknow",7,"bonus"),
			new Cell("unknow",8,"purchasable"),
			new Cell("Network 56K",9,"jail"),
			new Cell("unknow",10,"purchasable"),
			new Cell("unknow",11,"bonus"),
			new Cell("unknow",12,"purchasable"),
			new Cell("1&1",13,"host"),
			new Cell("Hadopi 200",14,"purchasable"),
			new Cell("unknow",15,"purchasable"),
			new Cell("unknow",16,"bonus"),
			new Cell("unknow",17,"purchasable"),
			new Cell("E3",18,"boost"),
			new Cell("unknow",19,"purchasable"),
			new Cell("unknow",20,"bonus"),
			new Cell("unknow",21,"purchasable"),
			new Cell("Ikoula",22,"host"),
			new Cell("Hadopi 300",23,"purchasable"),
			new Cell("unknow",24,"purchasable"),
			new Cell("unknow",25,"bonus"),
			new Cell("unknow",26,"purchasable"),
			new Cell("Internet Shutdown",27,"go to jail"),
			new Cell("unknow",28,"purchasable"),
			new Cell("unknow",29,"bonus"),
			new Cell("unknow",30,"purchasable"),
			new Cell('OVH', 31,"host"),
			new Cell("unknow",32,"bonus"),
			new Cell("unknow",33,"purchasable"),
			new Cell("Hadopi 400",34,"host"),
			new Cell("unknow",35,"purchasable")
		];
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
		
	}

	/**
	 * Get the value of board
	 */ 
	public function getBoard()
	{
		return $this->board;
	}
}
