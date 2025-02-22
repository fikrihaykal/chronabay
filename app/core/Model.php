<?php

    namespace App\Core;

    use PDO;
    use PDOException;

    abstract class Model{
        protected static function getDb(){
            static $db = null;

            if($db === null){
                $host = DB_HOST;
                $database = DB_NAME;
                $username = DB_USERNAME;
                $password = DB_PASSWORD;

                try{
                    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
                } catch(PDOException $e){
                    echo $e->getMessage();
                }
            }

            return $db;
        }
    }

?>