<?php

    class DB{

        static $connection = null;

        public static function getBanco(){
            if(!isset(DB::$connection)){
                DB::$connection = new PDO('mysql:host=localhost;dbname=formulario;','root','19981223Pluto23#');
            }
            return DB::$connection;
        }
    }

?>

