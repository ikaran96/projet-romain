<?php 

require_once('./controllers/ArticleC.php');
require_once('./controllers/AdminC.php');
require_once('./controllers/UserC.php');

class Application 
{
    public static function process() 
    {
        $controllerName = "Article";
        $taskName = "showAll";

        if (!empty($_GET['controller'])) 
        {
            $controllerName = ucfirst($_GET['controller']);
        }
        if (!empty($_GET['task'])) 
        {
            $taskName = $_GET['task'];
        }

        $controllerName =  $controllerName."C";

        $controller = new $controllerName;
        $controller->$taskName();

    }


}