<?php

    include_once("Metudiant.php");

    class Cetudiant{

      //attribruts
      private $etudiant;
      //methodes
      public function __construct(){
        $this->etudiant=new etudiant();
      }


      //fonction qui va lister tous les personnes dans la page d'acceuil
      public function index(){
        $resultat=$this->etudiant->lister();
        return $resultat;
      }

      //fonction qui va inserer les personnes dans la base de donnees;
      public function Ajouter($id,$nom,$prenom,$email,$sexe,$adresse,$date){

        // $this->etudiant[0]['ID']=$id;
        // $this->etudiant[1]['Nom']=$nom;
        // $this->etudiant[2]['Prenom']=$prenom;
        // $this->etudiant[3]['Email']=$email;
        // $this->etudiant[4]['Sexe']=$sexe;
        // $this->etudiant[5]['Adresse']=$adresse;
        // $this->etudiant[6]['Date']=$date;

        $this->etudiant->set("ID",$nom);
        $this->etudiant->set("Nom",$nom);
        $this->etudiant->set("Prenom",$prenom);
        $this->etudiant->set("Email",$email);
        $this->etudiant->set("Sexe",$sexe);
        $this->etudiant->set("Adresse",$adresse);
        $this->etudiant->set("Date",$date);

        $resultat=$this->etudiant->ajouter();
        return $resultat;
      }
      //fonction qui va permettre de supprimer une personne
      public function Supprimer(){
        $this->etudiant->set("ID",$id);
        $this->etudiant->supprimer();
      }

      //fonction qui va permettre de modifier une personne
      public function Rechercher(){
        $this->etudiant->set("ID",$id);
        $this->etudiant->rechercher();
      }

      //fonction qui va permettre de modifier une personne
      public function Modifier(){
        $this->etudiant->set("ID",$id);
        $this->etudiant->rechercher();
        $this->etudiant->modifier();
      }

    }
?>
