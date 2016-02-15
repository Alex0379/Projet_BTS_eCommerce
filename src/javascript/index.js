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
    $('#bootstrapSelectForm')
        .find('[name="famille"]')
            .selectpicker()
            .change(function(e) {
                $('#bootstrapSelectForm').formValidation('revalidateField', 'famille');
            })
            .end()
        .find('[name="socket"]')
            .selectpicker()
            .change(function(e) {
                $('#bootstrapSelectForm').formValidation('revalidateField', 'socket');
            })
            .end()
        .formValidation({
            framework: 'bootstrap',
            excluded: ':disabled',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                colors: {
                    validators: {
                        callback: {
                            message: 'Selectionner une ou plusieurs famille',
                            callback: function(value, validator, $field) {
                                // Get the selected options
                                var options = validator.getFieldElements('colors').val();
                                return (options != null && options.length >= 1 && options.length <= options.length);
                            }
                        }
                    }
                },
                socket: {
                    validators: {
                        callback: {
                            message: 'Selectionner un ou plusieurs socket',
                            callback: function(value, validator, $field) {
                                // Get the selected options
                                var options = validator.getFieldElements('socket').val();
                                return (options != null && options.length >= 1 && options.length <= options.length);
                            }
                        }
                    }
                }
            }
        });
});