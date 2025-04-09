<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hallo
<?php
    session_start();

    
    // Verwijder het item met key = $id
    $id = $_GET['id'];
    echo "Te verwijderen ID: " . $id . "<br>";
    
    // Stap 1: haal de string op en maak er een array van
    
    // Stap 2: zoek het item en unset het
    print_r($_SESSION["producten_ids"]);

    unset($_SESSION["producten_ids"][$id]);
    
    // Stap 3: zet de array weer terug naar string in sessie
   
    
    echo "Nieuwe lijst:<br>";
    
    // Sla de aangepaste array terug op in de sessie
    
    // Debuggen: toon de array na verwijderen
    echo "Na verwijderen:<br>";
    print_r($_SESSION["producten_ids"]);
    header('Location: winkelwagen.php');

?>
    
</body>
</html>
