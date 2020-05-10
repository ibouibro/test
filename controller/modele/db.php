<?php
function getConnection()
{
    $host="localhost";
    $user="root";
    $password="";
    $dbname="examen";
    
    try {
        //code...
        $dsn="mysql:host=$host;dbname=$dbname";
        $db=new PDO($dsn, $user, $password);
    } catch (PDOException $ex) {
        //throw $th;
        die($ex->getMessage());
    }
    return $db;
}
?>