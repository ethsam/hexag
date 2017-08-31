var pass = jQuery('#password_initial').val();
var pass_verif = jQuery('#password_verif').val();

jQuery('#register_button').click(
  function() {
 if ( pass != pass_verif )
 {
    jQuery('#informations_span').text("Les mot de passe ne sont pas les mèmes ");
  }

  });
