<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Accueil</title>
    <link href="../../src/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../src/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../src/css/connexion_admin.css" rel="stylesheet">
  </head>
  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="index.html">        
        <div class="login-wrap">
            <p class="login-img"><i class="fa fa-lock"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Identifiant" autofocus="">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" placeholder="Mot de passe">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Se souvenir de moi
                <span class="pull-right"> <a href="#"> Mot de passe oublié?</a></span>
            </label>
            <button class="btn btn-info btn-lg btn-block" type="submit">Connexion</button>
        </div>
      </form>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../javascript/jquery.js"><\/script>')</script>
    <script src="../../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  </body>
</html>