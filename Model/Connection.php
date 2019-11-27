<?php
declare(strict_types=1);

class Connection
{
    function openConnection()
    {
        $dbhost = "localhost";
        $dbuser = ""; //username
        $dbpass = ""; //pass of username
        $db = ""; //schema or database name

        $pdo = new PDO('mysql:host=' . $dbhost . ';dbname='. $db, $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $pdo;
    }
}