<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestGame extends TestCase
{
    //On vérifie que le fichier de test se lance correctement dés le début
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function TestaGame() {
        $player1 = new Player(uniqid(), 'Player1', #0000FF);
        $player2 = new Player(uniqid(), 'Player2', #00FFFF);
        $player3 = new Player(uniqid(), 'Player3', #FF00FF);
        $player4 = new Player(uniqid(), 'Player4', #00FF00);
        $player5 = new Player(uniqid(), 'Player5', #FF0000);
        $player6 = new Player(uniqid(), 'Player6', #777777);
        $player7 = new Player(uniqid(), 'Player7', #AA2578);
        $game = new Game();
        // 2 players can join the game
        // 2 players need to be diferent
        // 6 players max
        // Cannot play outside the board
        // Min 2 players to start a game
        // Can roll the dice
        // Cannot play when game is over
        // Detect a winner
    }
}