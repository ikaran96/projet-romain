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

            $articles = $this->ArticleM->findAll(['T_categorie' => 'id_categorie']);

            $pageTitle = 'Accueil';
            Renderer::render('home', compact('pageTitle', 'articles'));
        }

        public function showCa()
        {
            $id_categorie = htmlentities($_GET["id"]);
            $articles = $this->ArticleM->findBy('T_Article.id_categorie', $id_categorie, true, ['T_categorie' => 'id_categorie']);

            $pageTitle = $articles[0]["nom_categorie"];
            Renderer::render('top', compact('pageTitle', 'articles'));
        }

        public function show()
        {
            $id_article = htmlentities($_GET["id"]);
            $article = $this->ArticleM->findBy('id_articlenum', $id_article, false, ['T_categorie' => 'id_categorie']);
            $minis = $this->ArticleM->findBy('T_Article.id_categorie', $article["id_categorie"], true, ['T_categorie' => 'id_categorie']);

            $pageTitle = $article["nom_article"];
            Renderer::render('article', compact('pageTitle', 'article', 'minis'));
        }



}