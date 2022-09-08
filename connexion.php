<?php
    require "config.php";
    $stringConnexion="mysql:host=$host;dbname=$db;charset=UTF8";
    try {
	    $pdo = new PDO($stringConnexion, $user, $password);
       
    } catch (PDOException $e) {
        echo $e->getMessage();
    }