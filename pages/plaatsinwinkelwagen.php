<?php
session_start();

// Check of het bestaat
if (!isset($_SESSION["producten_ids"])) {
    $_SESSION["producten_ids"] = []; // nieuw array
} elseif (!is_array($_SESSION["producten_ids"])) {
    // Als het een string is, zet om naar array
    $_SESSION["producten_ids"] = explode("-", $_SESSION["producten_ids"]);
}

// Voeg toe
$_SESSION["producten_ids"][] = $_GET['id'];

// Debug output
foreach ($_SESSION["producten_ids"] as $id) {
    if (is_numeric($id)) {
        echo "Product ID: " . $id . "<br>";
    }
}

// Optional: redirect
header('Location: index.php');
?>
