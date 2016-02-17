/* Barre de navigation (Header) */
jQuery(window).load(function () {
    
    var navbar = $('#navbar-main');
    var distance = navbar.offset().top;
    var $window = $(window);
    
    $window.scroll(function () {
        if ($window.scrollTop() >= distance) {
            navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
            $('body').css('padding-top', '70px');
        } else {
            navbar.removeClass('navbar-fixed-top');
            $('body').css('padding-top', '0px');
        }
        
    });
});

/* Formulaire de Tri */
$(document).ready(function() {
    /* Tri famille - config */
        $('#triFamille').multiselect({
            includeSelectAllOption: true,
            nonSelectedText: 'Selectionner une ou plusieurs famille',
            nSelectedText: ' familles sélectionnés',
            allSelectedText: 'Toutes les familles sélectionnées...',
            selectAllText: 'Sélectionner tout',
            buttonWidth: '100%',
            selectAllValue: 'valeurAdefinir'
        });
        
    /* Tri socket - config */
        $('#triSocket').multiselect({
            includeSelectAllOption: true,
            nonSelectedText: 'Selectionner un ou plusieurs socket',
            nSelectedText: ' sockets sélectionnés',
            allSelectedText: 'Tous les sockets sélectionnés',
            selectAllText: 'Sélectionner tout',
            buttonWidth: '100%',
            selectAllValue: 'valeurAdefinir'
        });
        
    /* Initialisation des tri */
        $('#triFamille').multiselect('selectAll', false);
        $('#triFamille').multiselect('updateButtonText');
        $('#triSocket').multiselect('selectAll', false);
        $('#triSocket').multiselect('updateButtonText');
        
    /* Sliders */
        $("#sliderNbCoeur").rangeSlider(
            {bounds:{min: 2, max: 8}},
            {defaultValues:{min: 2, max: 8}},
            {step: 1},
            {arrows: false}
        );
        
        $("#sliderFreq").rangeSlider({
            formatter:function(val){
                  var value = Math.round(val * 10) / 10,
                    decimal = value - Math.round(val);
                  return decimal == 0 ? value.toString() + ".0" : value.toString();
            }},            
            {bounds:{min: 1.3, max: 4.7}},
            {defaultValues:{min: 1.3, max: 4.7}},
            {step: 0.1},
            {arrows: false}
        );
        
        $("#sliderPrix").rangeSlider(
            {bounds:{min: 100, max: 1000}},
            {defaultValues:{min: 100, max: 1000}},
            {step: 5},
            {arrows: false}
        );
        
        // Renvoi des valeurs max et min
        var valeurSliderNbCoeur = $("#sliderNbCoeur").rangeSlider("values");
        var valeurSliderFreq = $("#sliderFreq").rangeSlider("values");
        var valeurSliderPrix = $("#sliderPrix").rangeSlider("values");
        console.log("Nb Coeur " + valeurSliderNbCoeur.min + " " + valeurSliderNbCoeur.max);
        console.log("Freq. " + valeurSliderFreq.min + " " + valeurSliderFreq.max);
        console.log("Prix " + valeurSliderPrix.min + " " + valeurSliderPrix.max);
    });

