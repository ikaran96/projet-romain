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
}