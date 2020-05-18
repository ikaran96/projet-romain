<?php 

class Renderer 
{

    public static function render(string $path, array $variables = [], $admin = false)
    {
        extract($variables);

        ob_start();

        if($admin) 
        {
            require('template/include/admin/' . $path . '.php');
        } else {
            require('template/include/main/' . $path . '.php');
        }
        
        $pageContent = ob_get_clean();
        
        if($admin) 
        {
            require('template/admin.php');
        } else {
            require('template/layout.php');
        }
    }

}