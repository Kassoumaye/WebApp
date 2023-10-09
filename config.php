<!DOCTYPE html>
<html>

<head>
    <title>Site Web PHP / MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Bases de données MySQL</h1>
    <?php
    
            $servername = 'localhost';
            $username = 'g2r';
            $password = 'P@ssw0rd';
            $database = 'user_db';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password,$database);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';  
        ?>
</body>

</html>