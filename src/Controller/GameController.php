<?php

namespace App\Controller;

use App\Controller\AbstractController;

class GameController extends AbstractController
{
    public function hangman()
    {
        
        $this->render('game/hangman.php', [
        ]);
    }
}