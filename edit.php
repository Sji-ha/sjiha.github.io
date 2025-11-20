<?php
//stap 1 verbinding

include("verbinding/verbindingdatabank.php");


//stap 2 sql

$sql="SELECT * FROM `tblgames` WHERE `gameid` = :id";

//stap 3 voorbereiden
$stmt=$connectie->prepare($sql);

//stap 4 plaatsaanduiders
$data=["id"=>$_GET['id']];

//stap 5 uitvoeren
$stmt->execute($data);

//stap 6 ophalen
$game = $stmt->fetch();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="opmaak/opmaakedit.css">
    <title>Document</title>
</head>
<body>

<div class="form-container">
    <h2>Game bewerken</h2>

    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $game['gameid']?>">

        <label>Titel:</label>
        <input type="text" name="titel" value="<?php echo $game['gametitel']?>">

        <label>Genre:</label>
        <input type="text" name="genre" value="<?php echo $game['gamegenre']?>">

        <button>Update game</button>
    </form>

    <a href="index.php">Terug naar overzicht</a>
</div>

</body>
</html>
