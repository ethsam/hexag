<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="content/themes/default/login.css">

    <!--[if lt IE 9]
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    [endif]-->

  </head>
  <body>

    <div class="container">

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
          <img src="content/themes/default/login_logo.png" class="img-responsive" alt="logo login" />
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" placeholder="mon@mail.com" />

          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />


          <div class="pwstrength_viewport_progress"></div>


          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
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
    <script src="content/themes/default/login.js"></script>
  </body>
</html>
