<?php get_header(); ?>


<script>
jQuery.noConflict();
jQuery(document).ready(function()
{
  // initialise les paramètres d'intervalle et de suivi slider
  var cible = 1;
  var boucle;

  // définit la boucle
  var timer = function(){
    boucle = setInterval(cycle, 5000);
  };
  // lance la boucle
  timer();

  // détecte le click
  jQuery('.jq_switch').click(function() //trace le clic
  {
    // récupère un clic éventuel sur une cible
    cible = jQuery(this).attr('data-jq_affiche');
    // alert('cible '+cible);
    rotation();
  });

  // gestion affichage/masquage
  function rotation()
  {
    // afficher/masquer
    jQuery('.slider_masque').hide(); //cache les divs
    jQuery("#slide_actu_"+cible).show(); //affiche la div texte
    jQuery("#slide_actu_image_"+cible).show(); //affiche la div image

    // change l'onglet de navigation ouvert
    jQuery('.jq_switch').removeClass('slide_actuel');
    jQuery('#id_puce_'+cible).addClass('slide_actuel');

    // remet à zéro le compteur de la boucle et relance pour le cas où le clic est manuel
    clearInterval(boucle); // stoppe boucle
    timer(); // relance boucle
  };

  // programme la rotation
  function cycle()
  {
    cible += 1;
    if (cible > 2) cible = 1;
    // alert('cycle sur : '+cible);
    rotation();
    // ATTENTION : ne pas utiliser le forcage de click, "smartmenus" détecte ce forcage et masque le menu à chaque rotation
    // jQuery('#id_puce_'+cible).trigger('click');
  };
});
</script>
<div class="slider">
  <div class="slide">

    <div id ='slide_actu_image_1' class='slider_masque image_slide'><img src="<?php echo get_theme_mod('diapo_image_1', get_template_directory_uri().'/images/carrousel-01.jpg'); ?>" /></div>
    <div id ='slide_actu_image_2' class='slider_masque image_slide' style='display: none;'><img src="<?php echo get_template_directory_uri(); ?>/images/carrousel-02.jpg" /></div>
    <!--<div id ='slide_actu_image_3' class='slider_masque image_slide' style='display: none;'><img src="images/carrousel-03.jpg" /></div>-->

    <div class="conteneur_messages_slide">
      <div id='slide_actu_1' class='slider_masque message_slide'>
        <div class="cartouche_message_slide">Actualités</div>

        <p class="titre_message_slide"><?php echo get_theme_mod('diapo_gd_titre_1', 'Grand Titre 1'); ?></p>
        <p><strong><?php echo get_theme_mod('diapo_ss_titre_1', 'Découvrez le diaporama de notre dernière campagne.'); ?></strong></p>
        <p><small>Février 2017</small></p>
        <a href="<?php echo get_theme_mod('diapo_bouton_lien_1', 'http://www.google.fr'); ?>"><?php echo get_theme_mod('diapo_bouton_titre_1', 'CLIQUER ICI'); ?></a>
      </div>


      <div id='slide_actu_2' class='slider_masque message_slide' style='display: none;'>
        <div class="cartouche_message_slide">Actualités</div>
        <p class="titre_message_slide"><?php echo get_theme_mod('diapo_gd_titre_2', 'Grand Titre 2'); ?></p>
        <p><strong><?php echo get_theme_mod('diapo_ss_titre_2', 'Texte2. Omnis reniet venis et aceprovitam quam andaeri onsequiate dolorem. Duciant quaturiam sedi core.'); ?></strong></p>
        <a href="<?php echo get_theme_mod('diapo_bouton_lien_2', 'http://www.google.fr'); ?>"><?php echo get_theme_mod('diapo_bouton_titre_2', 'CLIQUER ICI'); ?></a>
      </div>
      <!--<div id='slide_actu_3' class='slider_masque message_slide' style='display: none;'>
        <p class="titre_message_slide">Titre3.</p>
        <p>Texte3. Duciant quaturiam sedi core cus inventibus, odis magnatis commolori delenissit eatur.</p>
        <a href="000.php">Découvrir</a>
      </div>-->
    </div>

    <div class="navigation_slide">
      <span id='id_puce_1' class='jq_switch slide_actuel' data-jq_affiche='1'>•</span><span id='id_puce_2' class='jq_switch' data-jq_affiche='2'>•</span><!--<span id='id_puce_3' class='jq_switch' data-jq_affiche='3'>•</span>-->
    </div>

  </div>
</div><!-- Fin bande carrousel-->

<!-- DECOUPE PHP - Fin de "inc_carrousel" - début de "inc_additionnelle1" -->
<div class="bande bande_blanche">

<!-- TEMPLATE PART VIDEOS-->

  <?php get_template_part('./template-parts/content', 'videos'); ?>

<!-- END TEMPLATE PART VIDEOS-->

</div><!-- Fin bande -->
<!-- DECOUPE PHP - Fin de "inc_additionnelle1" - début de "inc_recherche_carte" -->

<!-- TEMPLATE PART STORE LOCATION-->

  <?php get_template_part('./template-parts/content', 'store-location'); ?>

<!-- END TEMPLATE PART STORE LOCATION-->




<?php get_footer(); ?>
