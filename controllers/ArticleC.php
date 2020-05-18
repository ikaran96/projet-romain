<?php

require_once('./models/Model.php');
require_once('./models/ArticleM.php');
require_once("Renderer.php");

class ArticleC {

    private $ArticleM;

    public function __construct()
    {
        $this->ArticleM = new ArticleM;
        $this->ArticleNum = new Model('T_articlenum');
    }


        public function showAll()
        {
            // Récupération des numéros des articles
            $nbarticles = $this->ArticleNum->findAll('','ORDER BY id_articlenum DESC LIMIT 10');

            // Récupération des premières et dernières versions des articles
            $i = 0; $articles = [];
            foreach ($nbarticles as $nbarticle)
            {
                $articleV = $this->ArticleM->findBy('id_articlenum', $nbarticle[0], true, ['T_categorie' => 'id_categorie']);
                $articleFirst = $articleV[0];
                $articleLast = array_reverse($articleV)[0];

                $articles[$i] = compact('articleFirst','articleLast');
                $i++;
            }

            $pageTitle = 'Accueil';
            Renderer::render('home', compact('pageTitle', 'articles'));
        }

        public function showCa()
        {
            // Récupération de l'id de la catégorie
            $id_categorie = htmlentities($_GET["id"]);

            // Récupération des numéros des articles
            $nbarticles = $this->ArticleNum->findAll('','ORDER BY id_articlenum DESC');

            // Récupération des premières et dernières versions des articles
            $i = 0; $articles = [];
            foreach ($nbarticles as $nbarticle)
            {   
                $articleV = $this->ArticleM->findBy('id_articlenum', $nbarticle[0], true, ['T_categorie' => 'id_categorie']);
                
                if( $articleV[0]['id_categorie'] == $id_categorie )
                {
                    $articleFirst = $articleV[0];
                    $articleLast = array_reverse($articleV)[0];
                    $articles[$i] = compact('articleFirst','articleLast');
                    $i++;
                }
            }

            $pageTitle = $articles[0]['articleLast']["nom_categorie"];
            Renderer::render('top', compact('pageTitle', 'articles'));
        }

        public function show()
        {
            $id_articlenum = htmlentities($_GET["id"]);
            $articles = $this->ArticleM->findBy('id_articlenum', $id_articlenum, true, ['T_categorie' => 'id_categorie']);

            $articleFirst = $articles[0];
            $articleLast = array_reverse($articles)[0];

            $minis = $this->ArticleM->findBy('T_Article.id_categorie', $article["id_categorie"], true, ['T_categorie' => 'id_categorie']);

            $pageTitle = $article["nom_article"];
            Renderer::render('article', compact('pageTitle', 'articleFirst', 'articleLast', 'minis'));
        }

        public function test()
        {

            $pageTitle = $article["nom_article"];
            Renderer::render('home', compact('pageTitle'), true);
        }


}