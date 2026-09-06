<?php

$denumireProiect = "Kino - Sistem de gestionare a unui cinematograf";
$numeStudent = "Braniște Bogdan";
$grupa = "AAW-231";

$descriere = "Aplicație pentru gestionarea filmelor și
sesiunilor de vizionare a acestora, unde noi putem vizualiza ce filme sunt
în rulare și de a procura bilete pentru ele";

$entitatilePlanificate = "Film, Utilizator, Administrator";


# entitatea
$titlu = "Project Hail Mary";
$regizor = "Phil Ford";
$pretSesiunii = 75.00;
$nrLocuriDisponibile = 34;
$oraInceperiiSesiunii = "18:00";


# Definirea unei constante
const TIMP_PENTRU_REZERVATIE = 48;

const VERSIUNE_APLICATIE = "1.3";


# 1
$pretBilet1 = 80;
$numarBilete1 = 3;
$procentReducere1 = 10;
$costTotal1 = $pretBilet1 * $numarBilete1;
$reducere1 = $costTotal1 * $procentReducere1 / 100;
$totalPlata1 = $costTotal1 - $reducere1;

# 2
$pretBilet2 = 80;
$numarBilete2 = 2;
$procentReducere2 = 0;
$costTotal2 = $pretBilet2 * $numarBilete2;
$reducere2 = $costTotal2 * $procentReducere2 / 100;
$totalPlata2 = $costTotal2 - $reducere2;


# 3
$pretBilet3 = 80;
$numarBilete3 = 5;
$procentReducere3 = 20;
$costTotal3 = $pretBilet3 * $numarBilete3;
$reducere3 = $costTotal3 * $procentReducere3 / 100;
$totalPlata3 = $costTotal3 - $reducere3;


?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <title><?= $denumireProiect ?></title>
</head>

<body>

<h1><?= $denumireProiect ?></h1>

<h2>Datele entității Film</h2>

<p>Film: <?= $titlu ?></p>
<p>Regizor: <?= $regizor ?></p>
<p>Preț sesiune: <?= number_format($pretSesiunii, 2) ?> lei</p>
<p>Locuri rămase: <?= $nrLocuriDisponibile ?></p>
<p>Ora începerii sesiunii: <?= $oraInceperiiSesiunii ?></p>


<h2>1</h2>

<p>Preț bilet: <?= $pretBilet1 ?> lei</p>
<p>Număr bilete: <?= $numarBilete1 ?></p>
<p>Reducere: <?= $procentReducere1 ?>%</p>
<p>Cost total: <?= number_format($costTotal1, 2) ?> lei</p>
<p>Reducere aplicată: <?= number_format($reducere1, 2) ?> lei</p>
<p><strong>Total de plată: <?= number_format($totalPlata1, 2) ?> lei</strong></p>


<h2>2</h2>

<p>Preț bilet: <?= $pretBilet2 ?> lei</p>
<p>Număr bilete: <?= $numarBilete2 ?></p>
<p>Reducere: <?= $procentReducere2 ?>%</p>
<p>Cost total: <?= number_format($costTotal2, 2) ?> lei</p>
<p>Reducere aplicată: <?= number_format($reducere2, 2) ?> lei</p>
<p><strong>Total de plată: <?= number_format($totalPlata2, 2) ?> lei</strong></p>


<h2>3</h2>

<p>Preț bilet: <?= $pretBilet3 ?> lei</p>
<p>Număr bilete: <?= $numarBilete3 ?></p>
<p>Reducere: <?= $procentReducere3 ?>%</p>
<p>Cost total: <?= number_format($costTotal3, 2) ?> lei</p>
<p>Reducere aplicată: <?= number_format($reducere3, 2) ?> lei</p>
<p><strong>Total de plată: <?= number_format($totalPlata3, 2) ?> lei</strong></p>


<footer>
    <p>
        Autor: <?= $numeStudent ?> |
        Grupa: <?= $grupa ?> |
        Versiunea: <?= VERSIUNE_APLICATIE ?>
    </p>
</footer>

</body>
</html>