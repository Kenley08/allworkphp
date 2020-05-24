<?php
include_once("module/enrutador.php");
include_once("Cetudiant.php");
//require_once 'Connexion.php'

?>

<!DOCTYPE HTML>
<html>
    <head>
      <meta charset="utf-8"/>
    <title> Mon premier objet en php</title>
    <link rel="stylesheet"></link>
    </head>

    <body>
      <h1>
          Bienvenue dans la page d acceuil des etudiants
      </h1>
      <nav>
        <ul>
          <li>
            <a href="index.php">Refresh</a>
              <a href="vue/creer.php">Enregister</a>
          </li>
        </ul>
      </nav>

      <section>
        <table border="1">
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
                    $enrutador=new enrutador();
                    $enrutador->cagarvista($_GET['cagar']);

                   $etudiant=new Cetudiant();
                   $resultat=$etudiant->index();
                       While($row=mysqli_fetch_array($resultat)):
                    ?>
                        <tr>
                            <td><?php echo $row['ID']?></td>
                              <td><?php echo $row['Nom']?></td>
                                <td><?php echo $row['Prenom']?></td>
                                  <td><?php echo $row['Email']?></td>
                                    <td><?php echo $row['Sexe']?></td>
                                    <td><?php echo $row['Adresse']?></td>
                                    <td><a href="?cagar=creer&id=<?php echo $row['ID'];?>">ver</a></td>
                                      <td><a href="?cagar=ajouter&id=<?php echo $row['ID'];?>">Modifier</a></td>
                                        <td><a href="?cagar=supprimer&id=<?php echo $row['ID'];?>">Supprimer</a></td>
                        </tr>

                  <?php endwhile;

                  ?>

                </tbody>


        </table>

      </section>
    </body>
</html>
