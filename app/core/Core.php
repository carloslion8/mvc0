<?php

namespace App\core;

ini_set("display_errors", "1");
error_reporting(E_ALL);



class Core{


    public function run(){

       $url = '/';
       $parameters = array();

       if(isset($_GET['url'])){

         $url .= $_GET['url'];
       }


       if(!empty($url) && $url != '/'){

            $url = explode('/', $url);
            array_shift($url);

            $currentController = ucfirst($url[0].'Controller');
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])){

                $currentAction = $url[0];
                array_shift($url);
                
            }else{
                $currentAction = 'index';
            }

            if(count($url) > 0){

                $parameters = $url;
            }

            print_r($url);
        }else{

            $currentController = 'HomeController';
            $currentAction = 'index';
        }



        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $parameters);

    }
}