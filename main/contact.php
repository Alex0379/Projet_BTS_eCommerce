<?php include('header.php')?>

<!-- Intégration du css -->
    <link href="../src/css/contact.css" rel="stylesheet">

<!-- Corps -->
<main class="container">
    <div class="row">
        <div class="col-md-12">
            
                        <div class="col-md-6">
                            <div class="well well-sm">
                                <form class="form-horizontal" method="post">
                                    <fieldset>
                                        <legend class="text-center header">Contactez nous</legend>
                                        <div class="form-group">
                                            <div class="col-md-10 col-md-offset-1">
                                                <input id="fname" name="name" type="text" placeholder="Prénom" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-10 col-md-offset-1">
                                                <input id="lname" name="name" type="text" placeholder="Nom de famille" class="form-control">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <div class="col-md-10 col-md-offset-1">
                                                <input id="email" name="email" type="text" placeholder="Adresse mail" class="form-control">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <div class="col-md-10 col-md-offset-1">
                                                <input id="phone" name="phone" type="text" placeholder="Téléphone" class="form-control">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <div class="col-md-10 col-md-offset-1">
                                                <textarea class="form-control" id="message" name="message" placeholder="Entrez votre message ici." rows="7"></textarea>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <div class="panel panel-default">
                                    <div class="text-center header">Notre Société</div>
                                    <div class="panel-body text-center">
                                        <h4>E - Processor</h4>
                                        <div>
                                        Quai Duperré<br />
                                        17000 La Rochelle<br />
                                        05 01 02 03 04<br />
                                        contact@e-processor.com<br />
                                        </div>
                                        <hr />
                                        <div id="map1" class="map">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


            <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
    
            <script type="text/javascript">
                    function init_map1() {
                        var myLocation = new google.maps.LatLng(46.1578966, -1.1531052,18);
                        var mapOptions = {
                            center: myLocation,
                            zoom: 16
                        };
                        var marker = new google.maps.Marker({
                            position: myLocation,
                            title: "Property Location"
                        });
                        var map = new google.maps.Map(document.getElementById("map1"),
                            mapOptions);
                        marker.setMap(map);
                    }
                    init_map1();
            </script>
            
            
        </div>
    </div>
</main>

<!-- Intégration du js -->
    <script src="../src/javascript/jquery.js"></script>
    <script src="../src/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<?php include('footer.php') ?>