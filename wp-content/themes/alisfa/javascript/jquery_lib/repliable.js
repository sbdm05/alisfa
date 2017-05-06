jQuery.noConflict();
jQuery(document).ready(function(){
	// cache tous les blocs .repliable
	jQuery('#main .repliable').hide();

	//trace le clic
	jQuery('#main .bouton_ouvrir').click(function(){
		//switch de la cible
		jQuery(this).nextAll('.repliable').eq(0).slideToggle('normal','linear'); // cherche le prochain élément, même s'il n'est pas concomitant
		// jQuery(this).next('.repliable').fadeToggle('fast','linear');
		// jQuery(this).next('.repliable').slideToggle('fast','linear'); // ne fonctionne que si la class .repliable est juste après
		// jQuery(this).next('.repliable').toggle('slide',{direction: 'up'}); // utilise jquery-UI
	});

	//trace un clic sur bouton de fermeture
	jQuery('#main .bouton_fermer').click(function(){
		jQuery(this).parent().slideToggle('normal','linear');
	});
});
