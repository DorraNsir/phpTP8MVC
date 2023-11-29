<?php
include("../controller/client.php");
$C =new Client();
$id=$_POST['ra'];
$C->delete($id);
echo"tst";
header('Location:listeClients.php');
?>