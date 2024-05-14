<!-- Connexion à la base de donnée -->
<?php

$host = 'localhost';
$db   = 'projet_site';
$user = 'root';
$mdp = '';

$db_handle = mysqli_connect($host,$user,$mdp,$db);
if($db_handle)
{
    echo 'Connexion à la base de donnée réussie <br/>';
}
else
{
    echo 'Connexion à la base de donnée échouée <br/>';
}

