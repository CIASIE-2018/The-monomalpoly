<?php
include('Case.php');

class Partie{
	private $listeCouleur = ['red','yellow','orange','blue','green','grey'];
	private $listeNomCase = [];
	private $listeJoueur;
	private $plateau;
	private $timer;

	function Partie(){
		$this->listeJoueur = [];
		$this->timer = new Timer();

		/* Initialisation du plateau (liste de cases)*/
		for($i = 0 ;$i<$listeNomCase.length(); $i++){
			/* Systeme pour l'affichage en x/y */

			$this->plateau.add(new CaseDeJeux($listeNomCase[$i],$x,$y));
		}
	}

	function joueurJoin(){
		//On créé un nouveau joueur
		$listeJoueur.add(new Joueur($_SESSION['id'],$_SESSION['nom'],$listeCouleur[$listeJoueur.length()]));
	}

	function checkNbJoueur(){
		if($listeJoueur.length()<2){
			restartTimer();
		}
	}
}
?>