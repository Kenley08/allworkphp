<?php

      class connexion
     {

       //Les attribruts
       private $host;
       private $user;
       private $pass;
       private $bd;
       public $con;

       //les methodes
       public function __construct(){

              $this->host="localhost";
              $this->user="root";
              $this->pass="";
              $this->bd="dbinfo";

              $con=mysqli_connect($this->host,$this->user,$this->pass,$this->bd);

             if($con){
                //  mysql_select_db($this->bd);
                  echo"li bon";
             }
             else{
               echo"li pa bon";
             }

       }

       public function consultationsimple($con,$sql){
         mysqli_query($con,$sql);
       }

      // public function consultationreturn($sql){
        // $co;
        //  $con=mysqli_connect($this->host,$this->user,$this->pass,$this->bd);
      //   $consult=mysqli_query($sql);
      //   return $consult;
    //   }

     }


?>
