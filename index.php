<?php

$denumireProiect = "Kino - Sistem de gestionare a unui cinematograf";
$numeStudent = "Braniște Bogdan";
$grupa = "AAW-231";
$descriere = "Aplicație pentru gestionarea filmelor și 
sesiunilor de vizionare a acestora, unde noi putem vizualiza ce filme sunt 
in rulare si de a procura bilete pentru ele";
$entitatilePlanificate = "Film, Utilizator, Administrator";

# Prima entitate
# Film 1
$titlu = "Project Hail Mary";
$regizor = "Phil Ford";
$PretulSesiunii = 75.00;
$NrLocuriDisponibile = 34;
$OraInceperiiSesiunii = "18:00";

# Definirea unei constante
const TimpPentruRezervatie = 48;

#calculele cerute
$pretBilet = 80;
$numarBilete = 3;
$procentReducere = 10;

$costTotal = $pretBilet * $numarBilete;
$reducere = $costTotal * $procentReducere / 100;
$totalPlata = $costTotal - $reducere;

const VERSIUNE_APLICATIE = "1.2";

?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title><?= $denumireProiect ?></title>
</head>

<body>
<h1><?= $denumireProiect ?></h1>

<h2>Datele entității</h2>

<p>Film: <?= $titlu ?></p>
<p>Regizor: <?= $regizor ?></p>
<p>Pret: <?= number_format($totalPlata, 2) ?></p>
<p>Locuri ramase: <?= $NrLocuriDisponibile ?></p>

<footer>
    Autor: <?= $numeStudent ?> |
    Versiunea: <?= VERSIUNE_APLICATIE ?>
</footer>
</body>
</html>




