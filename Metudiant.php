<?php

      //  include_once("Connexion.php");

     class etudiant
     {




      private $id;
      private $nom;
      private $prenom;
      private $email;
      private  $sexe;
      private  $adresse;
      private  $date;
      private $attribut;

       public function __construct(){
         // $this->id="keke-09";
         // $this->nom="fofo";
         // $this->prenom="fefe";
         // $this->email="fefe@gmail.com";
         // $this->sexe="Masculin";
         // $this->adresse="tabarre";
         // $this->date="";
}

       public function set($attribut,$contenu){
         $this->attribut=$contenu;
       }

       public function get($attribut){
         return $this->attribut;
       }
       //fonction creer personne
       public function ajouter(){
         // $id="keke-09";
         // $nom="fofo";
         // $prenom="fefe";
         // $email="fefe@gmail.com";
         // $sexe="masculin";
         //  $adresse="tabarre";

          include("ConnectorBD.php");
         // $sql2="select * from detailspersonne where Email='{$this->email}'";
         // $resultat=mysqli_query($con,$sql2);
         // $num=mysqli_num_rows($resultat);

         //on teste si le variable num est different de 0,si oui on retun false sinon on insert dans la base de donnees
         // if($num!=0){
         //
         //   return false;
         //
         // }else{
           $sql="insert into detailspersonne(ID,Nom,Prenom,Email,Sexe,Adresse,Date) values('{$this->id}','{$this->nom}','{$this->prenom}','{$this->email}','{$this->sexe}','{$this->adresse}',NOW())";
          //$sql="insert into detailspersonne(ID,Nom,Prenom,Email,Sexe,Adresse,Date) values('{$this->id}','$nom','$prenom','$email','$sexe','$adresse',NOW())";
           $resultat=mysqli_query($con,$sql);


          if($resultat){
             mysqli_close($con);
          }

            return $resultat;
         // }

       }
       //fonction Supprimer personne
        public function supprimer(){
          $sql="delete from detailspersonne where ID='{$this->id}'";
          $this->con->consultationsimple($sql);
        }

        //fonction
         public function rechercher(){
           $sql="select * from detailspersonne where ID='{$this->id}' LIMIT 1";
           $resultat=$this->con->consultationsimple($sql);
           $row=mysql_fetch_assoc($resultat);

           //on recupere les donnees
           $this->id=$row['ID'];
           $this->nom=$row['Nom'];
           $this->prenom=$row['Prenom'];
           $this->email=$row['Email'];
           $this->sexe=$row['Sexe'];
           $this->adresse=$row['Adresse'];
           $this->Date=$row['Date'];
         }

         //fonction modifier Personne
         public function modifier(){
           $sql="update detailspersonne SET Nom='{$this->nom},Prenom='{$this->prenom},Email='{$this->email},Sexe='{$this->sexe},Adresse='{$this->adresse}' where ID='{$this->id}'";
           $this->con->consultationsimple($sql);
         }

         //Fonction Litser
        public function lister(){
            include("ConnectorBD.php");
        //  $con=mysqli_connect($host,$user,$pass,$bd);
          $sql="Select * from detailspersonne";
          $resultat=mysqli_query($con,$sql);
          //$resultat=consultationreturn($this->con,$sql);
          return $resultat;
        }
     }


?>
