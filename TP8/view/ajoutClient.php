<form action="ajoutClient_action.php" method="post">
        <fieldset>
            <legend style="color: blue; font-size: 70px;">Nouveau Client</legend>
      <br/>
      <h3>veuillez remplir les champs suivants</h3>
      <br/>
      <table>
        <tr>
            <td>
                <h3>Numero de cin  : </h3>
            </td>
            <td>
                <input type="text" name="cin">
            </td>
        </tr>
        <tr>
            <td>
                <h3>Nom : </h3>
            </td>
            <td>
                <input type="text" name="nom">
            </td>
        </tr>
        <tr>
            <td>
                <h3>Prenom : </h3>
            </td>
            <td>
                <input type="text" name="prenom">
            </td>
        </tr>
        <tr>
            <td>
                <h3>Telephone : </h3>
            </td>
            <td>
                <input type="text" name="telephone">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="sub" style="background-color: rgb(206, 177, 140); border-radius: 5px;">Enregistrer</button>
            </td>
            <td>
                <button type="reset" name="res" style="background-color: rgb(206, 177, 140); border-radius: 5px;">Annuler</button>
            </td>
      </table>
    </fieldset>
    </form>