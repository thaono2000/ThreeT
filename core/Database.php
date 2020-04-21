<?php
class Database
{
    private static $instance = NULL;
    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          self::$instance = new PDO('mysql:host=localhost;dbname=onlinemedicalmanagementsys', 'root', '');
          self::$instance->exec("SET NAMES 'utf8'");
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$instance;
    }
}


// $host="localhost";
// $port=3306;
// $socket="";
// $user="root";
// $password="";
// $dbname="classicmodels";

// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
// 	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();