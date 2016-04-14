$(document).ready(function() {
    
    $(".spinner").TouchSpin();
    
    $('.spinner').each(function(){
            $(this).on('change touchspin.on.min touchspin.on.max', function() {
                var valeurSpin = $(this).val();
                $(this).val(valeurSpin);
            })
            .end();
    });
    
    $('.recup-ligne').on('click', function(){
        var ligneSelect = $(this).attr('data-num-ligne');
        $('#num_ligne').val(ligneSelect);
    })
    
});