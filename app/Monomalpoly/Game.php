<?php

namespace App\Monomalpoly;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	//List of players play in the game
	private $listPlayer;
	//List of cells of the board
	private $board;
	//Defines who is it to play
	private $turn;
	//The number of the player board that must play
	private $numberTurn;
	function __construct(){
		$this->listPlayer = [];

		//List of the different Cells in the board with their position on x
		$this->board = [
			new Cell("Start",0,"start"),
			new Cell("R",1,"purchasable"),
			new Cell("Luck Card",2,"bonus"),
			new Cell("Kotlin",3,"purchasable"),
			new Cell("Kimsufi",4,"host"),
			new Cell("Hadopi 100",5,"purchasable"),
			new Cell("Swift",6,"purchasable"),
			new Cell("Luck Card",7,"bonus"),
			new Cell("Objective-C",8,"purchasable"),
			new Cell("Network 56K",9,"jail"),
			new Cell("Jupyter Notebook",10,"purchasable"),
			new Cell("Luck Card",11,"bonus"),
			new Cell("Ruby",12,"purchasable"),
			new Cell("1&1",13,"host"),
			new Cell("Hadopi 200",14,"purchasable"),
			new Cell("TypeScript",15,"purchasable"),
			new Cell("Luck Card",16,"bonus"),
			new Cell("Go",17,"purchasable"),
			new Cell("CES",18,"boost"),
			new Cell("Shell",19,"purchasable"),
			new Cell("Luck Card",20,"bonus"),
			new Cell("C#",21,"purchasable"),
			new Cell("Ikoula",22,"host"),
			new Cell("Hadopi 300",23,"purchasable"),
			new Cell("PHP",24,"purchasable"),
			new Cell("Luck Card",25,"bonus"),
			new Cell("C",26,"purchasable"),
			new Cell("Internet Shutdown",27,"go to jail"),
			new Cell("C++",28,"purchasable"),
			new Cell("Luck Card",29,"bonus"),
			new Cell("Java",30,"purchasable"),
			new Cell('OVH', 31,"host"),
			new Cell("Luck Card",32,"bonus"),
			new Cell("Python",33,"purchasable"),
			new Cell("Hadopi 400",34,"host"),
			new Cell("JavaScript",35,"purchasable")
		];
		$this->turn = null;
	}

	//Allows you to join the game
	function join($id, $name){
		$color = ['#00FF00','#FF0000','#0000FF','#fc0adc','#09fc9b','#fcf708'];
		$choiceColor = sizeof($this->listPlayer);
		$this->listPlayer[] = new Player($id, $name, $color[$choiceColor]);
	}

	//Allows you to start the game
	function start() {
		$this->numberTurn = random_int(0, sizeof($this->listPlayer)-1);
		$this->turn = $this->listPlayer[$this->numberTurn];
	}


	function checkNbPlayer(){
		if($listeJoueur.length()<2){
			restartTimer();
		}
	}

	//Allows you to roll the dice and move the player
	function move($player) {
		$moveNb = random_int(1,6) + random_int(1,6);
		if(!$this->penalty) {
			if($player->getPosX() + $moveNb > 35) {
				while($player->getPosX() < 35) {
					$player->setPosX($player->getPosX() + 1);
					$moveNb--;
				}
				$player->setPosX(0);
			}
			$player->setPosX($player->getPosX() + $moveNb);
		}
	}

	function buy($player, $number) {
		$pos = $player->getPosX();
		$this->board[$pos]->AddDisk($player, $number);
		$this->board[$pos]->setOwner($player);
	}

	//Allows you to move on to the next round
	function nextTurn() {
		if($this->numberTurn + 1 < sizeof($this->listPlayer) - 1) {
			$this->numberTurn++;
			$this->turn = $this->listPlayer[$this->numberTurn];
		} else {
			$this->numberTurn = 0;
			$this->turn = $this->listPlayer[$this->numberTurn];
		}
	}

	/**
	 * Get the value of listPlayer
	 */ 
	function getListPlayer(){
		return $this->listPlayer;
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

	/**
	 * Get the value of turn
	 */ 
	public function getTurn()
	{
		return $this->turn;
	}
}
