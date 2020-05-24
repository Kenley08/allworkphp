<?php
    include_once("../Cetudiant.php");
    //  include_once("../classes/Metudiant.php");
    $et=new Cetudiant();

    if(isset($_POST['btnajouter'])){
    //  $id=$_POST['id'];
  //   $r=$et->Ajouter($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['sexe'],$_POST['adresse'],$_POST['date']);
   $r=$et->ajouter("Edine-08",'Edine','Fleurine','fleurinekenley@gmail.com','masculin','Delmas','');
      if($r){

        echo"nouveau etudiant Ajoute avec succes!";
      }else{
            echo"Echec de l'enregistrement";
      }
    }
?>

<h4>ajouter  un nouveau etudiant</h4>
<hr>
<form action="creer.php" method="POST">
    <label>ID</label></br>
    <input type="text" name="id" ></input>
    </br></br>
    <label>Nom</label></br>
    <input type="text" name="nom"></input>
    </br></br>
    <label>Prenom</label></br>
    <input type="text" name="prenom" ></input>
    </br></br>
    <label>Email</label></br>
    <input type="email" name="email"  ></input>
    </br></br>
    <label>Sexe</label></br>
    <input type="text" name="sexe"  ></input>
    </br></br>
    <label>Adresse</label></br>
    <input type="text" name="adresse"  </input>
    </br></br>
    <label>Date</label></br>
    <input type="text" name="date" ></input>
    </br></br>
    <input type="submit" name="btnajouter" value="Ajouter">

</form>
