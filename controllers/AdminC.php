<?php

require_once('./models/Model.php');
require_once('./models/ArticleM.php');
require_once("Renderer.php");

class AdminC{

    private $ArticleM;

    public function __construct()
    {
        $this->ArticleM = new ArticleM;
        $this->ArticleNum = new Model('T_articlenum');
    }

    
    public function home()
    {

        $pageTitle = 'Accueil Admin';
        Renderer::render('home', compact('pageTitle'), true);
    }

    public function user()
    {

        $pageTitle = 'User - Admin';
        Renderer::render('utilisateurs', compact('pageTitle'), true);
    }

    public function article()
    {

        $pageTitle = 'User - Admin';
        Renderer::render('articles', compact('pageTitle'), true);
    }
    
    public function ajoutarticle()
    {

        $pageTitle = 'User - Admin';
        Renderer::render('ajoutarticle', compact('pageTitle'), true);
    }
    
    public function historique()
    {

        $pageTitle = 'User - Admin';
        Renderer::render('historique', compact('pageTitle'), true);
    }
}