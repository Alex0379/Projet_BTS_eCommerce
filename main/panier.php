<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/panier.css" rel="stylesheet">

<!-- Corps -->
<div class="container">
    <div class="row">
        <div class="col-md-12">

				<div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="desc">Description</th>
                                    <th>Quantité</th>
                                    <th>Prix (unité)</th>
                                    <th>Prix total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#"><img class="img-thumbnail" src="http://placehold.it/92x92" alt=""></a>
                                    </td>
                                    <td class="desc">
                                        <h4><a href="#">
                                            $nomArticle
                                        </a></h4>
                                        <ul class="unstyled">
                                            <li>$idArticle</li>
                                            <li>$typeArticle</li>
                                        </ul>
                                    </td>
                                    <td class="quantity">
                                        <div class="input-prepend input-append">
                                            <button class="btn"><i class="icon-chevron-left"></i></button>
                                            <input type="text" name="" value="1">
                                            <button class="btn"><i class="icon-chevron-right"></i></button>
                                        </div>
                                    </td>
                                    <td class="sub-price">
                                        <h3>150.00€</h3>
                                    </td>
                                    <td class="total-price">
                                        <h3>150.00€</h3>
                                        <small class="ecoPart">Eco-part: 8.00€</small>
                                    </td>
                                    <td>
                                        <button class="btn btn-small" data-title="Refresh" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-small btn-danger" data-title="Remove" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><img class="img-thumbnail" src="http://placehold.it/92x92" alt=""></a>
                                    </td>
                                    <td class="desc">
                                        <h4><a href="#">
                                            $nomArticle
                                        </a></h4>
                                        <ul class="unstyled">
                                            <li>$idArticle</li>
                                            <li>$typeArticle</li>
                                        </ul>
                                    </td>
                                    <td class="quantity">
                                        <div class="input-prepend input-append">
                                            <button class="btn"><i class="icon-chevron-left"></i></button>
                                            <input type="text" name="" value="1">
                                            <button class="btn"><i class="icon-chevron-right"></i></button>
                                        </div>
                                    </td>
                                    <td class="sub-price">
                                        <h3>150.00€</h3>
                                    </td>
                                    <td class="total-price">
                                        <h3>150.00€</h3>
                                        <small class="ecoPart">Eco-part: 8.00€</small>
                                    </td>
                                    <td>
                                        <button class="btn btn-small" data-title="Refresh" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-small btn-danger" data-title="Remove" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><img class="img-thumbnail" src="http://placehold.it/92x92" alt=""></a>
                                    </td>
                                    <td class="desc">
                                        <h4><a href="#">
                                            $nomArticle
                                        </a></h4>
                                        <ul class="unstyled">
                                            <li>$idArticle</li>
                                            <li>$typeArticle</li>
                                        </ul>
                                    </td>
                                    <td class="quantity">
                                        <div class="input-prepend input-append">
                                            <button class="btn"><i class="icon-chevron-left"></i></button>
                                            <input type="text" name="" value="1">
                                            <button class="btn"><i class="icon-chevron-right"></i></button>
                                        </div>
                                    </td>
                                    <td class="sub-price">
                                        <h3>150.00€</h3>
                                    </td>
                                    <td class="total-price">
                                        <h3>150.00€</h3>
                                        <small class="ecoPart">Eco-part: 8.00€</small>
                                    </td>
                                    <td>
                                        <button class="btn btn-small" data-title="Refresh" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-small btn-danger" data-title="Remove" data-placement="top" data-toggle="tooltip" data-original-title="" title=""><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
				</div><!-- Fin du Tableau -->


				<div class="row">
                    <div class="col-md-7">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </div>
                        </form>
                        <form class="form-inline">
                            <div class="form-group">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="codeReduc">Code de réduction</label>
                                <input type="email" class="form-control" id="codeReduc" placeholder="Code promo">
                            </div>
                        </form>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div><!--end span7-->
    
    
                    <div class="col-md-5">
                        <div class="cart-receipt">
                            <table class="table table-receipt">
                                <tbody><tr>
                                    <td class="alignRight">Sous Total</td>
                                    <td class="alignLeft">600.00€</td>
                                </tr>
                                <tr>
                                    <td class="alignRight">Frais de port</td>
                                    <td class="alignLeft">15.00€</td>
                                </tr>
                                <tr>
                                    <td class="alignRight">Réduction</td>
                                    <td class="alignLeft">0.00€</td>
                                </tr>
                                <tr>
                                    <td class="alignRight">TVA (20%)</td>
                                    <td class="alignLeft">12.00€</td>
                                </tr>
                                <tr>
                                    <td class="alignRight"><h2>Total</h2></td>
                                    <td class="alignLeft"><h2>825.00€</h2></td>
                                </tr>
                                <tr>
                                    <td class="alignRight"><button class="btn">Continuer Shopping</button></td>
                                    <td class="alignLeft"><button class="btn btn-primary">Commander</button></td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
				</div><!--end span5-->
    </div>
</div>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>