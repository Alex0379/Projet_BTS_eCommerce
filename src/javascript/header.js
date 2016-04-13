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

$(document).ready(function() {
    $('#connexHeaderForm').bootstrapValidator({
                                message: "Cette valeur n'est pas valide.",
                                feedbackIcons: {
                                    valid: 'glyphicon glyphicon-ok',
                                    invalid: 'glyphicon glyphicon-remove',
                                    validating: 'glyphicon glyphicon-refresh'
                                },
                                fields: {
                                    identifiantHeader: {
                                        validators: {
                                            notEmpty: {
                                                message: 'Veuillez renseigner un identifiant.'
                                            },
                                            stringLength: {
                                                min: 3,
                                                max: 30,
                                                message: 'Veuillez renseigner un identifiant compris entre 3 et 30 caractères'
                                            },
                                            regexp: {
                                                regexp: /^[a-zA-Z0-9_]+$/,
                                                message: 'Votre identifiant peut contenir seulement des lettres, chiffres et/ou underscore.'
                                            },
                                            different: {
                                                field: 'mot_de_passeHeader',
                                                message: 'Votre identifiant doit être différent du mot de passe.'
                                            }
                                        }
                                    },
                                    mot_de_passeHeader: {
                                        validators: {
                                            notEmpty: {
                                                message: 'Veuillez renseigner un mot de passe.'
                                            },
                                            different: {
                                                field: 'identifiantHeader',
                                                message: 'Votre mot de passe doit être différent de votre identifiant.'
                                            }
                                        }
                                    }
                                }
                            });
});