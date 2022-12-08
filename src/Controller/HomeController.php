<?php

namespace App\Controller;

use App\Model\GamesModel;
use App\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
        $gamesModel = new GamesModel();

        $games = $gamesModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $this->render('home/home.php', [
            'games' => $games
        ]);
    }
}