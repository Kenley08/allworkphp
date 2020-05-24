
<?php
  $etudiant=new Cetudiant();
  $resultat=$etudiant->index();
?>

<h4>Gestion des etudians</h4>

<table>
        <thead>
          <th>ID</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Email</th>
          <th>Sexe</th>
          <th>Adresse</th>
        </thead>

        <tbody>
            <?php

                While($row=mysql_fetch_array($resultat)):
            ?>
                <tr>
                    <td><?php echo $row['ID']?></td>
                </tr>

          <?php endwhile;?>

        </tbody>


</table>
