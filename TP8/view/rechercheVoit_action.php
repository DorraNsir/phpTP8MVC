<?php
include("../controller/voiture.php");
$Voiture  =new Voiture();
$c=$_POST['CAR'];
$v=$Voiture->liste_carb($c);

// header('Location:listeClient.php')
?>
<fieldset>
            <legend style="color: blue; font-size: 70px;">Liste des Voiture :<?php echo"$c"; ?> </legend>
<table border='1'>
        <tr>
         
            <td>
                <h3>Numero de serie</h3>
            </td>
            <td>
                <h3>Marque</h3>
            </td>
            <td>
                <h3>Pri de location</h3>
            </td>
        </tr>
        
            <?php
            foreach($v as $Voiture){
                echo"<tr>";
                echo"<td>$Voiture[numSerie]</td>";
                echo"<td>$Voiture[marque]</td>";
                echo"<td>$Voiture[prixLocation]</td>";
                echo"</tr>";
            }
            ?>
    </table>
    <button type="submit" name="sub" style="background-color: rgb(206, 177, 140); border-radius: 5px;">Supprimer</button>
    </fieldset>