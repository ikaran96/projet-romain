<?php 

require_once('Model.php');

class CategorieM extends Model {


    protected $_table;

    public function __construct() 
    {
        parent::__construct();
        $this->_table = "T_categorie";
    }


}