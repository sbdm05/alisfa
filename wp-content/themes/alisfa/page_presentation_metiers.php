<?php
/**
 * Template Name: Présentation des métiers

 */
get_header(); ?>


      <!-- Colonne principale -->
      <section class="colonne unique">
        <div id="main">
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>

           <div class="conteneur_boutons_metier">
            <div class="bouton_metier"><a href="#">Animateur</a></div>
            <div class="bouton_metier"><a href="#">Directeur</a></div>
            <div class="bouton_metier"><a href="#">Auxiliaire de puériculture</a></div>
            <div class="bouton_metier"><a href="#">Educateur de jeunes enfants</a></div>
          </div>

        </div>
      </section><!-- Fin colonne principale -->
<!-- DECOUPE PHP - Fin du contenu principal - début de "inc_fermeture_page (container et bande)" -->
    </div><!-- Fin page -->
  </div><!-- Fin container -->
</div><!-- Fin bande -->
<!-- DECOUPE PHP - Fin de "inc_fermeture_page (container et bande)" - début de "inc_additionnelle1" -->


<div class="bande bande_grise">

 <!-- TEMPLATE PART VIDEOS-->

  <?php get_template_part('./template-parts/content', 'videos'); ?>

<!-- END TEMPLATE PART VIDEOS-->


</div><!-- Fin bande -->



<?php get_footer(); ?>
