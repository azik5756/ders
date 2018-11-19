<?php

class Db
{

    public static function getconn()
    {
        $yol_to_connect=ROOT.'/config/dbparam.php';
        $val_to_connect=include($yol_to_connect);
        $mysql="mysql:host={$val_to_connect['host']};dbname={$val_to_connect['dtbase']}";
        $pdo=new PDO($mysql,$val_to_connect['user'],$val_to_connect['pass']);
        return $pdo;
    }
}

?>