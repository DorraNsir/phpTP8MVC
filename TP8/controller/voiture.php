<?php
include_once("../model/modele.php");
class Voiture extends Modele{
 private $idVoiture,$numSerie,$marque,$carburant,$prixLocation;
 function __construct(/*$id="",$numS="",$mar="",$carbu="",$prixloc=""*/) 
{
// $this->idVoiture=$id;
// $this->numSerie=$num;
// $this->marque=$mar;
// $this->carburant=$carbu;
// $this->prixLocation=$prixLoc;
parent::__construct();
 }
 public function getCarburant(){
    return this->carburant;
 }
 function insert($numSerie,$marque,$carburant,$prixLocation){
 $query="insert into client(numSerie,marque,carburant,prixLocation)values (?, ?, ?, ?)";
$res=$this->pdo->prepare($query); 
return $res->execute(array($numSerie,$marque,$carburant,$prixLocation)); 
 }
 function delete($idVoiture) {
 $query = "delete from voiture where idVoiture=?";
 $res=$this->pdo->prepare($query); 
return $res->execute(array($idVoiture)); 
}
function liste(){
$query = "select * from voiture";
$res=$this->pdo->prepare($query); 
$res->execute();
return $res;
}

function liste_carb($car){
    $query = "select * from voiture where carburant=?";
    $res=$this->pdo->prepare($query); 
    $res->execute(array($car));
    return $res;
    }
    function getVoiture($idVoi) {
        $query = "SELECT * FROM voiture WHERE idVoiture = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idVoi));
        return $res->fetch();
    }
}?>