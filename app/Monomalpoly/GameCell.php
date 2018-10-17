<?php

class GameCell
{
	private $type;
	private $name;
	public $listPlayer;
	private $x;
	private $y;

	public function Case($name,$x,$y){
		$this->listPlayer = [];
		$this->name = $name;
		$this->x = $x;
		$this->y = $y;
	}
}
?>