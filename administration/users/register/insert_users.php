<?php
  /* Récupère le formulaire au moment du chargement de la page register.php
  Dans le cas ou ont ne reçois rien ont continue le chargement. */
  if( isset($_POST['Register'])){
      if(isset($_POST['V_Pseudo'],$_POST['V_Name'],$_POST['V_Email'],$_POST['V_1pwd'],$_POST['V_2pwd'])){
          extract($_POST);
          echo $V_Pseudo." ".$V_Name." ".$V_Email." ".$V_1pwd;
      }
    }


?>
