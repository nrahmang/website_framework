<?php

class View {

    public static function page($file, $data = array()) {
        return (file_exists('framework/templates/' . $file . '.php')) ? include_once('framework/templates/' . $file . '.php') : false;
    }
    
    public static function redirect($url) {
        header("Location: " . $url);
        exit();
    }

}