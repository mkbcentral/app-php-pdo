<?php
    require 'connexion.php';

    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    
    $sql = "INSERT INTO users (name, email, phone)
                VALUES ('$username','$email', '$phone')";
        $stament=$pdo->query($sql);
        $stament->execute();
        echo 'Added ';
    
    