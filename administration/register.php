<!DOCTYPE html>

<?php
    require 'fonctions.php'; //Fichier contenant les fonctions
    require 'hex_config.php'; //fichier contenant les informations de connections à la BDD
  ?>


<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="content/themes/default/login.css">

    <!--[if lt IE 9]
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    [endif]-->

  </head>
  <body>
    <?php
      /* Récupère le formulaire au moment du chargement de la percentage
      Dans le cas ou ont ne reçois rien ont continue le chargement. */
      if( isset($_POST['Register'])){
          if(isset($_POST['V_Lastname'],$_POST['V_Name'],$_POST['V_Email'],$_POST['V_1pwd'],$_POST['V_2pwd'])){
              extract($_POST);
              echo $V_Lastname." ".$V_Name." ".$V_Email." ".$V_1pwd;

          }

      }
      

    ?>

    <div class="container">

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <section class="login-form">
        <form method="post" role="login">
          <img src="content/themes/default/login_logo.png" class="img-responsive" alt="logo login" />
          <input type="Lastname" name="V_Lastname" class="form-control input-lg" id="nom" placeholder="Jobs" required="" />
          <input type="Firstname" name="V_Name" class="form-control input-lg" id="prenom" placeholder="Steve" />
          <input type="email" name="V_Email" placeholder="Email" required class="form-control input-lg" placeholder="mon@mail.com" />
          <input type="password" name="V_1pwd" class="form-control input-lg" id="password_initial" placeholder="Password" required="" />
          <input type="password" name="V_2pwd" class="form-control input-lg" id="password_verif" placeholder="Password" required="" />
          <div class="pwstrength_viewport_progress"></div>


          <button id="register_button" type="submit" name="Register" class="btn btn-lg btn-primary btn-block">Register</button>
          <div>
            <a href="#">Login</a>
          </div>

        </form>

        <div class="form-links">
          <a href="http://www.ethsam.fr">www.ethsam.fr</a>
        </div>
      </section>
      </div>

      <div class="col-md-4"></div>


  </div>


</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="content/themes/default/verifpass.js"></script>
    <script src="content/themes/default/login.js"></script>
  </body>
</html>
