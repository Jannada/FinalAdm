<?php
class Conexion{
    static public function conectar(){
        
        $link = new PDO("mysql:host=localhost;dbname=financiera", "root", "");

        $link = exec("set names utf-8");
        return $link;
    }
}
?>