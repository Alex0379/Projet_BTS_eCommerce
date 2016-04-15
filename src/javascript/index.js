/* Formulaire de Tri */
$(document).ready(function() {
    /* Tri famille - config */
        $('#triFamille').multiselect({
            includeSelectAllOption: true,
            nonSelectedText: 'Selectionner une ou plusieurs famille',
            nSelectedText: ' familles sélectionnés',
            allSelectedText: 'Tous sélectionné',
            selectAllText: 'Sélectionner tout',
            buttonWidth: '100%',
            selectAllValue: 'valeurAdefinir'
        });
        
    /* Tri socket - config */
        $('#triSocket').multiselect({
            includeSelectAllOption: true,
            nonSelectedText: 'Selectionner un ou plusieurs socket',
            nSelectedText: ' sockets sélectionnés',
            allSelectedText: 'Tous sélectionné',
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
            {bounds:{min: 0, max: 8}},
            {defaultValues:{min: 0, max: 8}},
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
            {bounds:{min: 100, max: 4000}},
            {defaultValues:{min: 100, max: 4000}},
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
        
        $("#sliderNbCoeur").bind("valuesChanged", function(e, data){
                console.log("Values just changed. min: " + data.values.min + " max: " + data.values.max);
                $('#NbCoeurMin').val(data.values.min);
                $('#NbCoeurMax').val(data.values.max);
        });
        
        $("#sliderFreq").bind("valuesChanged", function(e, data){
                console.log("Values just changed. min: " + data.values.min + " max: " + data.values.max);
                //$('#FreqMin').val(data.values.min);
                //$('#FreqMax').val(data.values.max);
        });
        
        $("#sliderPrix").bind("valuesChanged", function(e, data){
                console.log("Values just changed. min: " + data.values.min + " max: " + data.values.max);
                $('#PrixMin').val(data.values.min);
                $('#PrixMax').val(data.values.max);
        });
    });

