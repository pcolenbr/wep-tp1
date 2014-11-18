jQuery(function() {
	jQuery.mobile.loading().hide();

	jQuery(document).bind("mobileinit", function () {
		jQuery.mobile.ajaxEnabled = false;
	});

	jQuery(document).ready(function() {
		jQuery('#dt_carousel').carousel({
			interval : 2500
		});
	});

	jQuery('.menu a').click(function(event) {
		event.preventDefault();
		var href = jQuery(this).attr('href');
		var pos = jQuery(href).position();
		jQuery('html,body').animate({scrollTop:(pos.top-110)})
	})

	jQuery('.botao-contato').click(function(event) {
		event.preventDefault();
		var nome = jQuery("#nome").val();
		var email = jQuery("#email").val();
		var mensagem = jQuery("#mensagem").val();
		
		if(validateForm(email)) {
			jQuery.post(url + '/action/email.php', {
				"nome" : nome,
				"email" : email,
				"mensagem" : mensagem
			}, function(response) {
				var json = jQuery.parseJSON(response);
				if (json.error.code == 0) {
					alert("Sua mensagem foi enviada com sucesso.");
					jQuery("#nome").val("");
					jQuery("#email").val("");
					jQuery("#mensagem").val("");
				} else if (json.error.code == -1){
					alert("Campos obrigat\xF3rios n\xE3o preenchidos");
				}  else if (json.error.code == -2){
					alert("Erro ao tentar enviar mensagem. Por favor, tente de novo em alguns momentos.");
				}
			});
		}
		
	});

});


function validateForm(email) {
	var atpos = email.indexOf("@");
	var dotpos = email.lastIndexOf(".");
	if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
		alert("E-mail inv\u00e1lido");
		return false;
	}
	return true;
}
