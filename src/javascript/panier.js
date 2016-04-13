$(document).ready(function() {
    
    $(".spinner").TouchSpin();
    
    $('.spinner')
            .on('change touchspin.on.min touchspin.on.max', function() {
                // Revaliate the field
                var valeurSpin = $('.spinner').val();
                
                console.log("Valeur : " + valeurSpin);
                var el = document.getElementById('spinner1');
                el.setAttribute('value', valeurSpin);
            })
            .end();
});