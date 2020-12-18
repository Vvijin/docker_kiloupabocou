<?php
$host = 'db';
$user = 'user';
$password = 'pass';
$database = 'mydb';
// echo 'Bienvenue !!!!';

$connexion = new mysqli($host, $user, $password, $database);
if($connexion->$erreur){
    echo 'Error' . $connexion->$erreur;
}
else {
echo 'Bienvenue sur MYSQL' ;
}

phpinfo();

?>