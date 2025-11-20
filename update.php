<?php
//stap 1: verbinding databank

include("verbinding/verbindingdatabank.php");

//stap 2: sql
$sql="UPDATE `tblgames` SET `gametitel` = :titel, `gamegenre` =:genre WHERE `tblgames`.`gameid` = :id;";

//stap 3: voorbereiden
$stmt = $connectie->prepare($sql);

//stap 4: plaatsaanduiders
$data=["id"=>$_POST['id'],

       "titel"=>$_POST['titel'],

        "genre"=>$_POST['genre']];

//stap 5: uitvoeren
$stmt->execute($data);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="opmaak/opmaakupdate.css">
    <title>Document</title>
</head>
<body>

<div class="msg-box">
    <h2>✔ Game succesvol aangepast!</h2>
    <a href="index.php">Terug naar overzicht</a>
</div>

</body>
</html>
