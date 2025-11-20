<?php

//stap 1 verbinding
include("verbinding/verbindingdatabank.php");

//stap 2 sql
$sql="SELECT * FROM `tblgames`";

//stap 3 voorbereiden
$games=$connectie->prepare($sql);

//stap 4: plaatsaanduiders

//stap 5: uitvoeren
$games->execute();




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="opmaak/opmaak.css">
    <title>Document</title>
</head>
<body>
<h2>Overzicht van games</h2>

<table>
    <tr>
        <th>Titel</th>
        <th>Genre</th>
        <th>Actie</th>
    </tr>

    <?php foreach($games as $game){ ?>
    <tr>
        <td><?php echo $game['gametitel']   ?></td>
        <td><?php echo $game['gamegenre']  ?></td>
        <td>
            <a class="button" href="edit.php?id=<?php echo $game['gameid']?>">Bewerken</a>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
