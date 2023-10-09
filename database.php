<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=user_db;charset=utf8;', 'g2r', 'P@ssw0rd');
}catch(PDOException $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}