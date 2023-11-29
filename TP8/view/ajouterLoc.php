<?php
include("../controller/client.php");
include("../controller/voiture.php");
$V=new Voiture();
$vv=$V->liste();
$C =new Client();
$cc=$C->liste();
?>
<form action="ajouterLoc_action.php" method="post">
    <fieldset>
        <legend style="color: blue; font-size: 70px;">Nouvelle Location : </legend>
        <table >
          
            <tr>
                <td><h3>Client : </h3>
                    <select name="Cli" >
                        <option value="">-- Selectionner un Client --</option>
                        <?php
                        foreach($cc as $Client){
                            echo'<option value="'.$Client['idClient'].'"'.">".$Client['nom']." ".$Client['prenom']."</option>";
                        } ?>
                      </select>
                </td>
            
            </tr>
            <tr>
                <td><h3>Voiture : </h3>
                    <select name="Voiture" >
                        <option value="">-- Selectionner une Voiture --</option>
                        <?php
                        foreach($vv as $Voiture){
                            echo'<option value="'.$Voiture['idVoiture'].'"'.">".$Voiture['marque']." ( ".$Voiture['numSerie']." ) "."</option>";
                        } ?>
                      </select>
                </td>
            </tr>
            <tr>
                <td><h3>Date : </h3>
                    <input type="date" name ="d" >
                </td>
            </tr>
            <tr>
                <td><h3>Nombre de jour : </h3>
                    <input type="text" name ="nb">
                </td>
            </tr>
        </table>
            <button type="submit" name="sub" style="background-color: rgb(206, 177, 140); border-radius: 5px;">Valider</button>
    </fieldset>
</form>