/* Barre de navigation (Header) */
jQuery(window).load(function () {
    
    var navbar = $('#navbar-main');
    var distance = navbar.offset().top;
    var $window = $(window);
    
    console.log(distance);
    
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
        $("#sliderPrix").rangeSlider(
            {bounds:{min: 100, max: 1000}},
            {defaultValues:{min: 100, max: 1000}},
            {step: 5}
        );
        
        // Renvoi des valeurs max et min
        var valeurSliderPrix = $("#sliderPrix").rangeSlider("values");
        console.log(valeurSliderPrix.min + " " + valeurSliderPrix.max);
    });

