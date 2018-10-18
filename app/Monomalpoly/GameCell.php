<?php

class GameCell
{
	private $type;
	private $name;
	private $listPlayer;
	private $x;
	private $y = 0;

	public function GameCell($name,$x){
		$this->listPlayer = [];
		$this->name = $name;
		$this->x = $x;
	}
	
}
?>