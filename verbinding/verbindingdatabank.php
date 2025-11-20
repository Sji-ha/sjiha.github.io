<?php 
//verbinding met de databank

$server="localhost";

$databank="computerwinkel";

$gebruiker="root";

$wachtwoord="";

$connectie = new PDO("mysql:host=$server;dbname=$databank", $gebruiker, $wachtwoord);

 ?>