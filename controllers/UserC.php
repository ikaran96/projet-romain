<?php

require_once("Renderer.php");

class UserC{

    public function showConnexion(){
        $pageTitle = 'Connexion';
        Renderer::render('connection', compact('pageTitle'));
    }

    public function showInscription(){
        $pageTitle = 'Inscription';
        Renderer::render('inscription', compact('pageTitle'));
    }
}