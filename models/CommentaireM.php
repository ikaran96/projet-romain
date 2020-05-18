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

        $tab = $items;
        $taille = sizeof($items);
        $count = 0; //variable qui va nous permettre de savoir si on a un modérateur;
        $i = 0;
        $dejafai = array(); //tableau pour vérifier si on a déjà fait cette valeur;

        $commentaires = []; //mon tableau final pour la vue des commentaires;
        
        for ($i = 0; $i < $taille; $i++) { //Boucle sur chaque commentaire
            if (in_array($tab[$i][4], $dejafai)) {
                // on a déjà fait cette valeur
            } else {
                $lastcom = $tab[$i][1];
                $Author = $tab[$i][3]; //l'auteur c'est tjr le premier, donc on enregistre la valeur;
                for ($z = 0; $z < $taille; $z++) { //boucle sur chaque autre commentaire pour savoir si c'est le dernier
                    if ($tab[$i][4] == $items[$z][4]) { // Si c'est le même commentaire alors
                        if ($tab[$i][0] < $items[$z][0]) { // On prend le dernier en date
                            $lastcom = $items[$z][1];
                            $moderateur = $items[$z][3]; //si c'est modéré alors on affiche son modérateur;
                            $count++; //on incrémente pour dire qu'on a un modérateur
                        }
                    }
                }

                //je suis tout seul

                //j'enregister mon id_commentaire
                $id_commentaire = $tab[$i][0];
                
                // à chaque tour, j'ajoute une ligne à mon tableau dont l'index est l'id _commentaire
                $commentaires[$id_commentaire] = [
                    "id_commentaire" => $id_commentaire,
                    "contenu_commentaire" => $lastcom,
                    "date_commentaire" => $tab[$i][2],
                    "id_auteur" => $Author,
                    "id_numcommentaire" => $tab[$i][4],
                    "id_moderateur" => "null"
                ];

                if ($count > 0) {
                    // s'il existe un modérateur, je modifie mon entrée de tableau moderateur
                    $commentaires[$id_commentaire]['id_moderateur'] = $moderateur;
                }

                $count = 0; // je réinitialise ma valeur pour le modérateur à chaque tour
                $dejafai[] = $tab[$i][4]; // j'ajoute ma valeur dans le tableau pour dire que j'ai déjà fait.

            }
            //fin de boucle pour on refait pour chaque valeur de $i
        };

        return $commentaires;
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
                VALUES (?, ?, ?, ?)';
        // $sql = "INSERT INTO `t_commentaire` (contenu_commentaire, `date_commentaire`, `id_user`, `id_numcommentaire`) 
        //         VALUES ($contenu_commentaire, '2020-05-13', '1', '$id_numcommentaire')";

        $req = $this->_pdo->prepare($sql);

        $req->execute(array(
            $contenu_commentaire => 'contenu_commentaire',
            $date_commentaire => 'date_commentaire',
            $id_user => 'id_user',
            $id_numcommentaire => 'id_numcommentaire'
        ));

        return $req;
    }

    public function editComment($id_commentaire)
    {
        // on récupère l'id de l'utilisateur qui modifie le commentaire
        $user_id = 1;


        $sql = 'INSERT INTO t_commentaire (contenu_commentaire, date_commentaire, id_user, id_numcommentaire)
                (SELECT contenu_commentaire, date_commentaire, ?, id_numcommentaire
                FROM t_commentaire
                WHERE id_commentaire = ?)';

        $req = $this->_pdo->prepare($sql);

        $req->execute(array($user_id, $id_commentaire));

        return $req;
    }
}
