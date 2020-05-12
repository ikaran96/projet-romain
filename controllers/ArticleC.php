<?php

require_once('./models/ArticleM.php');
require_once("Renderer.php");

class ArticleC {

    private $ArticleM;

    public function __construct()
    {
        $this->ArticleM = new ArticleM;
    }


        public function showAll()
        {

            $articles = $this->ArticleM->findAll();

            $pageTitle = 'Accueil';
            Renderer::render('home', compact('pageTitle', 'articles'));
        }

        public function showTop()
        {
            $articles = $this->ArticleM->findBy('id_categorie', 2, true);

            $pageTitle = 'Top';
            Renderer::render('top', compact('pageTitle', 'articles'));
        }

        public function show()
        {
            $id_article = htmlentities($_GET["id"]);
            $article = $this->ArticleM->findBy('id_articlenum', $id_article);

            $pageTitle = $article["nom_article"];
            Renderer::render('article', compact('pageTitle', 'article'));
        }

}