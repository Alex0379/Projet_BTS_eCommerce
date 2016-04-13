$(document).ready(function() {
    $('#inscriptionForm').bootstrapValidator({
        message: "Cette valeur n'est pas valide.",
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            identifiant: {
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
                        field: 'mot_de_passe,confirmMdp',
                        message: 'Votre identifiant doit être différent du mot de passe.'
                    }
                }
            },
            mot_de_passe: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner un mot de passe.'
                    },
                    identical: {
                        field: 'confirmMdp',
                        message: 'Votre mot de passe ne correspond pas.'
                    },
                    different: {
                        field: 'identifiant',
                        message: 'Votre mot de passe doit être différent de votre identifiant.'
                    }
                }
            },
            confirmMdp: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner un mot de passe.'
                    },
                    identical: {
                        field: 'mot_de_passe',
                        message: 'Votre mot de passe ne correspond pas.'
                    },
                    different: {
                        field: 'identifiant',
                        message: 'Votre mot de passe doit être différent de votre identifiant.'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner une adresse mail.'
                    },
                    emailAddress: {
                        message: 'Veuillez renseigner une adresse mail correcte.'
                    }
                }
            },
            prenom: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseignez votre prénom.'
                    }
                }
            },
            nom: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseignez votre nom.'
                    }
                }
            },
            sexe: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner votre sexe.'
                    }
                }
            },
            adresse1: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner votre adresse.'
                    }
                }
            },
            pays: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner votre pays.'
                    }
                }
            },
            ville: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner votre ville.'
                    }
                }
            },
            code_postal: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner votre code postal.'
                    }
                }
            },
            date_naissance: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner votre date de naissance.'
                    },
                    date: {
                        format: 'YYYY-MM-DD',
                        message: "Vote date de naissance n'est pas valide."
                    }
                }
            },
            telephone: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner votre numéro de téléphone.'
                    }
                }
            }
        }
    });
    
     $('#connexionForm').bootstrapValidator({
        message: "Cette valeur n'est pas valide.",
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            identifiant: {
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
                        field: 'mot_de_passe',
                        message: 'Votre identifiant doit être différent du mot de passe.'
                    }
                }
            },
            mot_de_passe: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez renseigner un mot de passe.'
                    },
                    different: {
                        field: 'identifiant',
                        message: 'Votre mot de passe doit être différent de votre identifiant.'
                    }
                }
            }
        }
    });
});