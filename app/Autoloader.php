<?php
/**
 * Created by PhpStorm.
 * User: betum
 * Date: 8/30/2020
 * Time: 8:51 AM
 */

//namespace App;

class Autoloader
{
    public static function autoload($class) {
        //  App\Table\TEST


       //var_dump($class);die; // => "app/table/"
        $files = str_replace("\\", "/", $class);
        $classes = explode("/",$files);
        $classe = array_pop($classes);
        $dir = strtolower(implode($classes,"/"));


       // var_dump("Dir : $dir.");
       // var_dump("Classe : $classe.");
       // var_dump("Lien : ../$dir/$classe." );


        if (!file_exists($files.".php")) {
            echo "salut : $files.php";
            require "../$dir/$classe.php";
        }


    }

    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }


}