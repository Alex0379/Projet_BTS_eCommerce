<?php
  include('header.php');
?>

    <link href="../src/bootstrap-3.3.6-dist/css/bootstrap-multiselect.css" rel="stylesheet">
    <link href="../src/css/iThing.css" rel="stylesheet">
    <link href="../src/css/jquery-ui.min.css" rel="stylesheet">
    <link href="../src/css/jquery-ui.structure.min.css" rel="stylesheet">
    <link href="../src/css/jquery-ui.theme.min.css" rel="stylesheet">
    <link href="../src/css/index.css" rel="stylesheet">

    <!-- Page Content -->
    <main class="container">

        <div class="row">

            <div class="col-md-3 formConteneur">
              <div class="formPadding">
                <p class="lead">Filtres</p>
                <form id="bootstrapSelectForm" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label"><i class="fa fa-users"></i> Famille</label>
                        <div class="selectContainer">
                            <select id="triFamille" multiple="multiple">
                                <option value="intelCeleron">Intel Celeron</option>
                                <option value="intelCorei3">Intel Core i3</option>
                                <option value="intelCorei5">Intel Core i5</option>
                                <option value="intelCorei7">Intel Core i7</option>
                                <option value="intelPentium">Intel Pentium</option>
                            </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label"><i class="fa fa-cogs"></i> Socket</label>
                        <div class="selectContainer">
                            <select id="triSocket" multiple="multiple">
                                <option value="intel1150">Intel 1150</option>
                                <option value="intel1151">Intel 1151</option>
                                <option value="intel1155">Intel 1155</option>
                                <option value="intel2011-V3">Intel 2011-V3</option>
                            </select>
                        </div>
                      </div>
                        
                  <div class="form-group">
                    <label for="sliderNbCoeur"><i class="fa fa-heart"></i> Nombre de coeurs</label>
                    <div id="sliderNbCoeur" name="sliderNbCoeur"></div>
                  </div>
                  
                  <div class="form-group">
                    <label for="sliderFreq"><i class="fa fa-heartbeat"></i> Fréquence - (GHz)</label>
                    <div id="sliderFreq" name="sliderFreq"></div>
                  </div>
                  
                  <div class="form-group">
                    <label for="sliderPrix"><i class="fa fa-eur"></i> Prix - (Euro)</label>
                    <div id="sliderPrix" name="sliderPrix"></div>
                  </div>
                    
                  <div class="form-group">
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-filter"></i> Appliquer les filtres</button>
                    </div>
                  </div>
                </form>
            </div>
          </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">24.99€</h4>
                                <h4><a href="#">First Product</a></h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="info">
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                      <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Ajouter</a>
                                    </p>
                                    <p class="btn-details">
                                      <i class="fa fa-list"></i><a href="#" class="hidden-sm">Détails</a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">24.99€</h4>
                                <h4><a href="#">First Product</a></h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="info">
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                      <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Ajouter</a>
                                    </p>
                                    <p class="btn-details">
                                      <i class="fa fa-list"></i><a href="#" class="hidden-sm">Détails</a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">24.99€</h4>
                                <h4><a href="#">First Product</a></h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="info">
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                      <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Ajouter</a>
                                    </p>
                                    <p class="btn-details">
                                      <i class="fa fa-list"></i><a href="#" class="hidden-sm">Détails</a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">24.99€</h4>
                                <h4><a href="#">First Product</a></h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="info">
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                      <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Ajouter</a>
                                    </p>
                                    <p class="btn-details">
                                      <i class="fa fa-list"></i><a href="#" class="hidden-sm">Détails</a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">24.99€</h4>
                                <h4><a href="#">First Product</a></h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="info">
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                      <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Ajouter</a>
                                    </p>
                                    <p class="btn-details">
                                      <i class="fa fa-list"></i><a href="#" class="hidden-sm">Détails</a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">24.99€</h4>
                                <h4><a href="#">First Product</a></h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="info">
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                      <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Ajouter</a>
                                    </p>
                                    <p class="btn-details">
                                      <i class="fa fa-list"></i><a href="#" class="hidden-sm">Détails</a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>
    <!-- /.container -->

    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap-multiselect.js"></script>
    <script src="../src/javascript/lib/jquery.mousewheel.min.js"></script>
    <script src="../src/javascript/lib/jquery-ui.min.js"></script>
    <script src="../src/javascript/jQRangeSlider-min.js"></script>
    <script src="../src/javascript/index.js"></script>
    
<?php
  include('footer.php')
?>