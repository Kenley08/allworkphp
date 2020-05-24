<?php


    class enrutador{
      public function cagarvista($vue){

        switch ($vue) {
          case "creer":
            include_once('vue/'.$vue.'.php');
            break;

          default:
            include_once('index.php');
            break;
        }
      }

      // public function validateGET($variable){
      //   if(empty($variable)){
      //     include_once('vue/init.php');
      //
      //   }else{
      //     return true;
      //   }
      // }

     }

?>
