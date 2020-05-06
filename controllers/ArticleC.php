<?php

require_once('./models/Article.php');
require_once("Renderer.php");

class ArticleC {

    private $ArticleM;

    public function __construct()
    {
        $this->ArticleM = new Article;
    }


        public function showAll()
        {

            $articles = $this->ArticleM->findAll();

            $pageTitle = 'Accueil';
            Renderer::render('home', compact('pageTitle', 'articles'));
        }

        public function showTop()
        {

            $pageTitle = 'Top';
            Renderer::render('top', compact('pageTitle'));
        }

        public function show()
        {


            $pageTitle = 'Nom de l\'article';
            Renderer::render('article', compact('pageTitle'));
        }

}