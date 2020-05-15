<?php
require_once('./models/UserM.php');
require_once("Renderer.php");

class UserC{

    private $UserM;

    public function __construct()
    {
        $this->UserM = new UserM;

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

    public function inscriptionUser(){
        $pseudo_user = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
        $password_user = !empty($_POST['pass']) ? $_POST['pass'] : NULL;
        $mail_user = !empty($_POST['mail_user']) ? $_POST['mail_user'] : NULL;
        $avatar_user = !empty($_POST['avatar']) ? $_POST['avatar'] : NULL;      
        $newUser = $this->UserM->inscriptionUser($pseudo_user, $password_user, $mail_user,$avatar_user);
        if  ($newUser){
            header ("location:index.php");
        }else{
            echo "erreur";
        }
    }

    public function verifToken(){
        $verifToken = $this->UserM->verifToken();

    }

    public function connexionUser(){
        $pseudo_user = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
        $password_user = !empty($_POST['pass']) ? $_POST['pass'] : NULL;
        $connUser = $this->UserM->connexionUser($pseudo_user, $password_user);
        if  ($connUser){
            header ("location:index.php");
        }else{
            echo "erreur";
        }

    }

    public function activationToken(){
        $tokenactivation = $this->UserM->activationToken();
        if ($tokenactivation){
            header("lcation:index.php");
        }else{
            echo "erreur";
        }

    }
}    




    


// //confirmation token

//     public function activationUser(){
//         $token = $_GET['activation'];
//         $this->UserM->updateInto([
//             "token_user" =>$token,
//             "etat_user" => 1
//         ],  "pseudo_user, $pseudo_user");
//     }

//     public function connexionUser(){
//         $pseudo_user = $mdp_user = $typeuser = "";

//         $pseudo_user = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
//         $mdp_user = !empty($_POST['pass']) ? $_POST['pass'] : NULL;

//         $user = $this->findBy('pseudo_user',$pseudo_user);
//         // if ($user = ["pseudo_user"] == $pseudo_user){
//         //     if ( password_verify($mdp_user, $user["mdp_user"]) ) {
//         //         if ($user["etat_user"] == 1) {
//         //             $typeuser = $user["id_typeuser"];
//         //             session_start();
//         //             $_SESSION['pseudo_user'] == $pseudo_user;
//         //             $_SESSION['id_typeuser'] == $typeuser;
//         // }
        
        
//     }

