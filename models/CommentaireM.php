<?php

require_once('Model.php');

class CommentaireM extends Model
{
    public $_table = "t_commentaire";

    public function findComments()
    {
        $sql = "SELECT C.* 
                FROM {$this->_table} C
                LEFT JOIN t_numcommentaire N 
                    ON N.id_numcommentaire = C.id_numcommentaire
                WHERE N.id_articlenum = 1";
        $req = $this->_pdo->prepare($sql);
        $req->execute();
        $items = $req->fetchAll();
        $req->closeCursor();
        return $items;
    }

    public function insertComment($id_articlenum)
    {
        //je crée un nouvel id pour le commentaire, attaché au numéro de l'article
        $sql = "INSERT INTO t_numcommentaire (id_articlenum)
                VALUES (:id_articlenum)";
        $req = $this->_pdo->prepare($sql);
        $req->execute(array('id_articlenum' => $id_articlenum));

        $req->closeCursor();

        // la dernière id insérée est récupérée
        $id_numcommentaire = $this->_pdo->lastInsertId();
        
        // $contenu_commentaire = !empty($_POST['comment']) ? $_POST['comment'] : NULL;
        $date_commentaire = date('Y-m-d');
        $id_user = "1";
        $contenu_commentaire = "commentaire";
        var_dump($contenu_commentaire);

        $sql = 'INSERT INTO t_commentaire (`contenu_commentaire`, `date_commentaire`, `id_user`, `id_numcommentaire`)
                VALUES (:contenu_commentaire, :date_commentaire, :id_user, :id_numcommentaire)';
        // $sql = "INSERT INTO `t_commentaire` (contenu_commentaire, `date_commentaire`, `id_user`, `id_numcommentaire`) 
        //         VALUES ($contenu_commentaire, '2020-05-13', '1', '$id_numcommentaire')";

        $req = $this->_pdo->prepare($sql);

        $req->execute(array(
            $contenu_commentaire => 'contenu_commentaire',
            $date_commentaire => 'date_commentaire', 
            $id_user =>'id_user', 
            $id_numcommentaire => 'id_numcommentaire'));
    }

}
