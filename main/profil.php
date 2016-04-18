<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/dashboard.css" rel="stylesheet">

<!-- Corps -->
<main class="container">
    <div class="row">
        <div class="col-md-12">
            
            <h1>Modifier Profil</h1>
            <hr>
            <div class="row">
              <!-- left column -->
              <div class="col-md-3">
                <div class="text-center">
                  <img src="../images/100x100.png" class="avatar img-circle" alt="avatar">
                  <h6>Changer la photo de profil...</h6>
                  
                  <input type="file" class="form-control">
                </div>
              </div>
              
              <!-- edit form column -->
              <div class="col-md-9 personal-info">
                <div class="alert alert-info alert-dismissable">
                  <a class="panel-close close" data-dismiss="alert">×</a> 
                  <i class="fa fa-coffee"></i>
                  Vous pouvez modifier votre profil à tout moment !
                </div>
                <h3>Informations personnelles</h3>
                
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Prénom:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="Jane">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Nom:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="Bishop">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Adresse:</label>
                    <div class="col-lg-8">
                      <input class="form-control" style="margin-bottom: 15px;" type="text" value="">
                      <input class="form-control" type="text" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="janesemail@gmail.com">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Identifiant:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="janeuser">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Mot de passe:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password" value="11111122333">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Mot de passe:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password" value="11111122333">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                      <input type="button" class="btn btn-primary" value="Sauvegarder changement">
                      <span></span>
                      <input type="reset" class="btn btn-default" value="Annuler">
                    </div>
                  </div>
                </form>
              </div>
          </div>
            
        </div>
    </div>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>