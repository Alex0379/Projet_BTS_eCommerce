<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/description_Article.css" rel="stylesheet">
    
<!-- Corps -->
<main class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-sm-6">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://placehold.it/350x250/e8117f/fff&amp;text=Product+Main">
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/350x250/00ffff/000&amp;text=Product+Image+2">
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/350x250/ff00ff/fff&amp;text=Product+Image+3">
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/350x250/ffff00/000&amp;text=Product+Image+4">
                            </div>
                        </div>
                    </div> 
                <div class="clearfix">
                    <div id="thumbcarousel" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="http://placehold.it/100/e8117f/fff&amp;text=Product+Main"></div>
                                <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="http://placehold.it/100/00ffff/000&amp;text=Product+Image+2"></div>
                                <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="http://placehold.it/100/ff00ff/fff&amp;text=Product+Image+3"></div>
                                <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/100/ffff00/000&amp;text=Product+Image+4"></div>
                            </div><!-- /item -->
                        </div><!-- /carousel-inner -->
                    </div> <!-- /thumbcarousel -->
                </div><!-- /clearfix -->
                </div> <!-- /col-sm-6 -->
                <div class="col-sm-6">
                    <h2>$Titre Article</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                    <div class="quantiteArticle">
                        <div class="center">
                            <p>Quantité</p>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </span>
                                <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div> <!-- /col-sm-6 -->
                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Ajouter au panier</button>
                        </div>
                    </div>
              </div> <!-- /row -->
            
        </div>
            <div class="col-sm-12">
                <div class="description_Complete">
                <h2>Description de l'article</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                </div>
            </div> <!-- /col-sm-12 -->
    </div>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/javascript/description_Article.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>