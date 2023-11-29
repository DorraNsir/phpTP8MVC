<?php
include("../controller/client.php");
$C =new Client();
// $cc=$C->liste();
include("../controller/voiture.php");
$V =new Voiture();
// $vv=$V->liste();
include("../controller/location.php");
$L =new Location();
$ll=$L->liste();
?>
<fieldset>
    <legend style="color: blue; font-size: 70px;">Liste des Locations</legend>
<table border='1'>
        <tr>
            <td colspan='3'>
                <h3>Location</h3>
            </td>
            <td colspan='2'>
                <h3>Voiture</h3>
            </td>
            <td colspan='3'>
                <h3>Client</h3>
            </td>
            
        </tr>
        <tr>
            <td >
                <h3>Identifiant</h3>
            </td>
            <td >
                <h3>Nbr de jour </h3>
            </td>
            <td >
                <h3>Date</h3>
            </td>
            <td >
                <h3>Marque</h3>
            </td>
            <td >
                <h3>Numero de Serie</h3>
            </td>
            <td >
                <h3>Numero Cin</h3>
            </td>
            <td >
                <h3>Nom</h3>
            </td>
            <td >
                <h3>Prenom</h3>
            </td>
        </tr>
        <?php
             for ($i = 0; $i < $ll->rowCount(); $i++) {
                $Location = $ll->fetch(PDO::FETCH_ASSOC);
                $VoitInfo = $V->getVoiture($Location["idVoiture"]);
                $ClientInfo = $C->getClient($Location["idClient"]);
                echo "<tr>";
                 echo "<td>" . $Location["idLocat"] . "</td>";
                 echo "<td>" . $Location["nbrJour"] . "</td>";
                 echo "<td>" . $Location["dateLoc"] . "</td>";
                 echo "<td>" . $VoitInfo["marque"] . "</td>";
                 echo "<td>" . $VoitInfo["numSerie"] . "</td>";
                 echo "<td>" . $ClientInfo["ncin"] . "</td>";
                 echo "<td>" . $ClientInfo["nom"] . "</td>";
                 echo "<td>" . $ClientInfo["prenom"] . "</td>";
                 echo "</tr>";
             }
              ?>
    </table>
    </fieldset>

             
