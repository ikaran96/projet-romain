<?php 

require_once('Model.php');

class ArticleM extends Model {


    protected $_table;

    public function __construct() 
    {
        parent::__construct();
        $this->_table = "T_Article";
    }

}