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
            }else{
                echo "Pseudo ou Mail déjà pris";
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

    public function connexionUser(){
        $pseudo_user = !empty($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
        $password_user = !empty($_POST['pass']) ? $_POST['pass'] : NULL;
        $sql="SELECT * FROM t_user WHERE pseudo_user = ? AND password_user = ? AND id_typeuser=3";
        $req = $this->_pdo->prepare($sql);
        $req->execute([$pseudo_user, $password_user]);
        $count = $req->rowCount();
        if ($count > 0) {
            $donnees = $req->fetch();
            $mdp = $donnees['password_user'];
            $mdpvalide = password_verify($password_user, $mdp);
            if($mdpvalide ==1){
                $lastlog = date("Y-m-d H:i:s");
                $sql="UPDATE t_user SET lastlog_user = :lastlog_user WHERE id_user = :id_user";
                $req = $this->_pdo->prepare($sql);
                $req->execute(array(
                    'lastlog_user' => $lastlog,
                    'id_user' => $donnees['id_user']
                ));
                session_start();
                $_SESSION['id_user'] = $donnees['id_user'];
                $_SESSION['pseudo_user'] = $donnees['pseudo_user'];
                $_SESSION['id_typeuser'] = $donnees['id_typeuser'];
                header('location:index.php');
            }else{
                header('location:?controller=user&task=showConnexion?error');
            }


        }
            
    }


    public function activationToken(){
        $token = $_GET['activation'];
        $sql="SELECT * FROM t_user  WHERE token_user = ?";
        $req->execute([$token]);
        $count = $req->rowCount();
        if ($count > 0) {
            $sql= "UPDATE t_user SET etat_user = ? WHERE token_user = ?";
            $req->execute([1, $token]);
        }

    }
}
    