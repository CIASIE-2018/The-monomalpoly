<?php

class GameCell
{
	private $type;
	private $name;
	private $listPlayer;
	private $x;
	private $y = 0;

	public function GameCell($name,$x,$type){
		$this->listPlayer = [];
		$this->name = $name;
		$this->x = $x;
		$this->type= $type;
	}
	
	public function getType(){
		return $this->type;
	}
}
?>