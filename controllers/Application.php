<?php 

require_once('./controllers/ArticleC.php');
<<<<<<< HEAD
=======
require_once('./controllers/UserC.php');
>>>>>>> 0e83fc00db684526830475f8ee85f5bfcb0f3e9b

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

<<<<<<< HEAD
=======
    }


    public static function user() 
    {
        $controllerName = "User";
        $taskName = "showConnexion";

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
>>>>>>> 0e83fc00db684526830475f8ee85f5bfcb0f3e9b

    }


}