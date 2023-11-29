<?php
include("../controller/location.php");
$voit=$_POST['Voiture'];
echo $voit;
$client=$_POST['Cli'];
echo $client;
$date=$_POST['d'];
$nbJ=$_POST['nb'];
$loc=new Location();
$loc->insert($client,$voit,$nbJ,$date);
header('Location:ajouterLoc.php')
?>