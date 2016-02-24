<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/dashboard.css" rel="stylesheet">

<!-- Corps -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-md-4">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="15">15</span>
                                </div>
                                <div class="desc"> Historique Commande </div>
                            </div>
                        <a class="more" href="javascript:;"> Voir détails
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="4">4</span>
                            </div>
                            <div class="desc"> Article Panier </div>
                        </div>
                        <a class="more" href="javascript:;"> Voir détails
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-stat purple">
                        <div class="visual">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="89"> $nomClient </span></div>
                            <div class="desc"> Profil </div>
                        </div>
                        <a class="more" href="javascript:;"> Voir détails
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Articles récemments visités</h3>
                                </div>
                                <div class="col-md-3">
                                    <!-- Contrôles -->
                                    <div class="controls pull-right hidden-xs">
                                        <a class="left fa fa-chevron-left btn" href="#carousel-example" data-slide="prev"></a>
                                        <a class="right fa fa-chevron-right btn" href="#carousel-example" data-slide="next"></a>
                                    </div>
                                </div>
                            </div>
                            <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                                <!-- Wrapper pour slides -->
                                <div class="carousel-inner">
                                    
                                    <div class="item active"><!-- Articles visible (4 max) -->
                                        <div class="row">
                                            
                                            <div class="col-sm-3"><!-- Début Article -->
                                                <div class="col-item">
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-6">
                                                                <h5>Product A</h5>
                                                                <h5 class="price-text-color">$7.99</h5>
                                                            </div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="photo">
                                                        <img src="http://placehold.it/250x200" class="img-responsive" alt="a" />
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
                                            </div><!-- Fin Article -->
                    
                                            <div class="col-sm-3"><!-- Début Article -->
                                                <div class="col-item">
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-6">
                                                                <h5>Product B</h5>
                                                                <h5 class="price-text-color">$9.99</h5>
                                                            </div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="photo">
                                                        <img src="http://placehold.it/250x200" class="img-responsive" alt="a" />
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
                                            </div><!-- Fin Article -->
                                            
                                            <div class="col-sm-3"><!-- Début Article -->
                                                <div class="col-item">
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-6">
                                                                <h5>Product C</h5>
                                                                <h5 class="price-text-color">$7.58</h5>
                                                            </div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="photo">
                                                        <img src="http://placehold.it/250x200" class="img-responsive" alt="a" />
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
                                            </div><!-- Fin Article -->
                                            
                                            <div class="col-sm-3"><!-- Début Article -->
                                                <div class="col-item">
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-6">
                                                                <h5>Another product</h5>
                                                                <h5 class="price-text-color">$3.75</h5>
                                                            </div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="photo">
                                                        <img src="http://placehold.it/250x200" class="img-responsive" alt="a" />
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
                                            </div><!-- Fin Article -->
                                            
                                        </div>
                                    </div><!-- Fin Articles visible -->
                                    
                                    <div class="item"><!-- Articles caché (4 max) -->
                                        <div class="row">
                                            
                                            <div class="col-sm-3"><!-- Début Article -->
                                                <div class="col-item">
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-6">
                                                                <h5>Product</h5>
                                                                <h5 class="price-text-color">$7.17</h5>
                                                            </div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="photo">
                                                        <img src="http://placehold.it/250x200" class="img-responsive" alt="a" />
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
                                            </div><!-- Fin Article -->
                    
                                            <div class="col-sm-3"><!-- Début Article -->
                                                <div class="col-item">
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-6">
                                                                <h5>Product</h5>
                                                                <h5 class="price-text-color">$19.99</h5>
                                                            </div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="photo">
                                                        <img src="http://placehold.it/250x200" class="img-responsive" alt="a" />
                                                    </div>
                                                    <div class="info">
                                                        <div class="separator clear-left">
                                                            <p class="btn-add">
                                                                <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                                            </p>
                                                            <p class="btn-details">
                                                                <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                                            </p>
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Fin Article -->
                                            
                                            <div class="col-sm-3"><!-- Début Article -->
                                                <div class="col-item">
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-6">
                                                                <h5>Product</h5>
                                                                <h5 class="price-text-color">$1.99</h5>
                                                            </div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="photo">
                                                        <img src="http://placehold.it/250x200" class="img-responsive" alt="a" />
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
                                            </div><!-- Fin Article -->
                                            
                                            <div class="col-sm-3"><!-- Début Article -->
                                                <div class="col-item">
                                                    <div class="info">
                                                        <div class="row">
                                                            <div class="price col-md-6">
                                                                <h5>Product</h5>
                                                                <h5 class="price-text-color">$1.09</h5>
                                                            </div>
                                                            <div class="rating hidden-sm col-md-6">
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                                <i class="price-text-color fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="photo">
                                                        <img src="http://placehold.it/250x200" class="img-responsive" alt="a" />
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
                                            </div><!-- Fin Article -->
                                            
                                        </div>
                                    </div><!-- Fin Articles caché -->
                                    
                                </div>
                            </div>
                        </div>
            
        </div>
    </div>
</div>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>