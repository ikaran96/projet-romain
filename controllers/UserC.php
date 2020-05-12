<?php
require_once('./models/UserM.php');
require_once("Renderer.php");

class UserC{

    private $UserM;
    // private $pseudo_user;
    // private $mdp_user;
    // private $mail_user;
    // private $avatar_user;
    // private $token_user;
    // private $etat_user;
    // private $typeuser;

    public function __construct()
    {
        $this->UserM = new UserM;
        // $this->pseudo_user = $_pseudo_user;
        // $this->mdp_user = $_mdp_user;
        // $this->mail_user = $_mail_user;
        // $this->avatar_user = $_avatar_user;
        // $this->token_user = substr(str_shuffle(str_repeat("0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN", 40)), 0, 40);
        // $this->etat_user = 0;
        // $this->typeuser = $_typeuser;
    }

    public function showConnexion(){

        $pageTitle = 'Connexion';
        Renderer::render('connection', compact('pageTitle'));
    }

    public function showInscription(){

        $pageTitle = 'Inscription';
        Renderer::render('inscription', compact('pageTitle'));
    }

    public function showContact(){
        
        $pageTitle = 'Contact';
        Renderer::render('contact', compact('pageTitle'));
    }

    //inscription

    public function inscriptionUser(){
        $pseudo_user = $mdp_user = $mail_user = $avatar_user ="";

        $pseudo_user = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
        $mdp_user = !empty($_POST['pass']) ? $_POST['pass'] : NULL;
        $mail_user = !empty($_POST['mail_user']) ? $_POST['mail_user'] : NULL;
        $avatar_user = !empty($_POST['avatar']) ? $_POST['avatar'] : NULL;

        
        if(!empty($pseudo_user) AND !empty($mdp_user) AND !empty($mail_user) AND !empty($avatar_user)){
            $token_user = substr(str_shuffle(str_repeat("0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN", 40)), 0, 40);
            $etat_user = 0;
            $typeuser = 3;

            $this->insertInto([
                "pseudo_user" => $pseudo_user,
                "password_user" => $mdp_user,
                "mail_user" => $mail_user,
                "avatar_user" => $avatar_user,
                "token_user" => $token_utilisateur,
                "etat_user"=> $etat_user,
                "typeuser"=> $id_typeuser
            ]);

        }         
    }


//confirmation token

    public function activationUser(){
        $token = $_GET['activation'];
        $this->UserM->updateInto([
            "token_user" =>$token,
            "etat_user" => 1
        ],  "pseudo_user, $pseudo_user");
    }

}