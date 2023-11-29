<?php
include_once("../model/modele.php");
class Location extends Modele{
 private $idClient,$idVoiture,$idLocat,$nbrJour,$dateLoc;
 function __construct(/*$idC="",$idV="",$idL="",$nbj="",$dateL=""*/) 
{
// $this->idClient=$idC;
// $this->$idVoiture=$idV;
// $this->$idLocat=$idL;
// $this->$nbrJour=$nbj;
// $this->$dateLoc=$dateL;
parent::__construct();
 }
 function insert($idClient,$idVoiture,$nbrJour,$dateLoc){
 $query="insert into location(idClient,idVoiture,nbrJour,dateLoc)values (?, ?, ?, ?)";
$res=$this->pdo->prepare($query); 
return $res->execute(array($idClient,$idVoiture,$nbrJour,$dateLoc)); 
 }
 function delete($idLocat) {
 $query = "delete from location where idLocat=?";
 $res=$this->pdo->prepare($query); 
return $res->execute(array($idLocat)); 
}
function liste(){
$query = "select * from location";
$res=$this->pdo->prepare($query); 
$res->execute();
return $res;
}
}?>