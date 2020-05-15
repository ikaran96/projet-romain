<?php 
require_once('Model.php');

class UserM extends Model {


    public $_table = "t_user";

    public function inscriptionUser($pseudo_user, $password_user, $mail_user,$avatar_user){   

        if(!empty($pseudo_user) && !empty($mdp_user) && !empty($mail_user) && !empty($avatar_user)){
            $sql="SELECT * FROM t_user WHERE mail_user = ? AND pseudo_user = ?";
            $req = $this->_pdo->prepare($sql);
            $req->execute([$mail_user, $pseudo_user ]);
            $count = $req->rowCount();
                if ($count == 0) {
                $token_user = substr(str_shuffle(str_repeat("0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN", 40)), 0, 40);
                $sql="INSERT INTO t_user SET pseudo_user = ?, password_user = ?,mail_user = ?, avatar_user = ?, token_user= ?, etat_user=0, id_typeuser=3";
                $req = $this->_pdo->prepare($sql);
                $req->execute([$pseudo_user,$password_user,$mail_user,$avatar_user,$token_user]); 
            }
        }
    } 
    
    public function verifToken(){
        $bool = false;
        $sql="SELECT etat_user FROM t_user WHERE pseudo_user = ?";
        $req = $this->_pdo->prepare($sql);
        $req->execute([$pseudo_user ]);
        $actif = $req->fetch();
        if ($actif['etat_user'] == "1") {
            $bool = true;
        }
        return $bool;
    }

    public function connexionUser($pseudo_user, $password_user){
        $sql="SELECT * FROM t_user WHERE pseudo_user = ? AND password_user = ? AND id_typeuser=3";
        $req = $this->_pdo->prepare($sql);
        $req->execute([$pseudo_user, $password_user]);
        $donnees = $req->fetch();
        $count = $req->rowCount();

        if ($count > 0) {
            $bool = $this->verifToken();
            if ($bool == true) {
                session_start();
                $etat_user = 1;
                $_SESSION['Pseudo'] = $pseudo_user;
            }
        }
    }
}
    