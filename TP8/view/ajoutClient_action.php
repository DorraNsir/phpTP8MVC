<?php
include("../controller/client.php");
$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['telephone'];
$Client =new Client();
$Client->insert($cin,$nom,$prenom,$tel);
header('Location:ajoutClient.php')
?>