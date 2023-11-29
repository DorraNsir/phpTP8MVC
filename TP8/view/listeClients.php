<?php
include("../controller/client.php");
$C =new Client();
$cc=$C->liste();

?>
<form action="supprimer.php" method="post">
<fieldset>
            <legend style="color: blue; font-size: 70px;">Liste des Etudiants</legend>
<table border='1'>
        <tr>
            <td>

            </td>
            <td>
                <h3>Identifiant</h3>
            </td>
            <td>
                <h3>Numero CIN</h3>
            </td>
            <td>
                <h3>Nom</h3>
            </td>
            <td>
                <h3>Prenom</h3>
            </td>
            <td>
                <h3>Telephone</h3>
            </td>  
        </tr>
        
            <?php
            foreach($cc as $Client){
                echo"<tr>";
                echo "<td> <input type='radio' value='$Client[idClient]' name='ra'/></td>";
                echo"<td>$Client[idClient]</td>";
                echo"<td>$Client[ncin]</td>";
                echo"<td>$Client[nom]</td>";
                echo"<td>$Client[prenom]</td>";
                echo"<td>$Client[telephone]</td>";  
                echo"</tr>";
        }
            ?>
    </table>
    <button type="submit" name="sub" style="background-color: rgb(206, 177, 140); border-radius: 5px;">Supprimer</button>
    </fieldset>
    </form>