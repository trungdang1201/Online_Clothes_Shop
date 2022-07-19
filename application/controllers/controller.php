<?php

class Controller
{
    public function view($path, $data = [])
    {   
        if(is_array($data)){
            
            extract($data);
        }
        if (file_exists("../application/views/" . THEME . $path . ".php")) {
            include "../application/views/" . THEME . $path . ".php";
        }else{
            include "../application/views/" . THEME . "404.php";
        }
    }

    public function load_model($model)
    {
        if (file_exists("../application/models/" .strtolower($model) . ".class.php")) {
            include_once "../application/models/" . strtolower($model)  . ".class.php";
            return $a = new $model();
        }

        return false;
    }
}
