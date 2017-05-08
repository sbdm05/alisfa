<?php
/**
 * Template Name: Fiche Métier

 */
get_header(); ?>


      <!-- Colonne principale -->
      <section class="colonne principale-sans_sb1">
        <div id="main">
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>

        </div>
      </section><!-- Fin colonne principale -->
<!-- DECOUPE PHP - Fin du contenu principal - début de "inc_col_droite" -->
      <!-- Colonne de droite -->
      <aside class="colonne sidebar2">
        <div class="masque_col_sb2">
          <?php if(has_post_thumbnail()): ?>
            <div class="illustration_sb2">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>

        </div>


        <?php if(is_active_sidebar('sidebar-1')): ?>
          <?php dynamic_sidebar('sidebar-1'); ?>
        <?php endif; ?>

        <hr />


       <?php if(is_active_sidebar('sidebar-2')): ?>
          <?php dynamic_sidebar('sidebar-2'); ?>
        <?php endif; ?>

        <hr />

       <?php if(is_active_sidebar('sidebar-3')): ?>
          <?php dynamic_sidebar('sidebar-3'); ?>
        <?php endif; ?>


        <a href="000.php" class="bouton_quiz_sb2">Testez vos connaissances</a>
      </aside><!-- Fin colonne sidebar2 -->
<!-- DECOUPE PHP - Fin de "inc_col_droite" - début de "inc_fermeture_page (container et bande)" -->
    </div><!-- Fin page -->
  </div><!-- Fin container -->
</div><!-- Fin bande -->
<!-- DECOUPE PHP - Fin de "inc_fermeture_page (container et bande)" - début de "inc_additionnelle1" -->
<div class="bande bande_grise">
  <!-- TEMPLATE PART VIDEOS-->

  <?php get_template_part('./template-parts/content', 'videos'); ?>

<!-- END TEMPLATE PART VIDEOS-->
</div><!-- Fin bande -->
<!-- DECOUPE PHP - Fin de "inc_additionnelle1" - début de "inc_additionnelle2" -->
<div class="bande bande_blanche">
  <div class="container">
    <div class="enveloppe videos">

      <a href="
           <?php

                  // Retrieves the stored value from the database
                  $meta_value = get_post_meta( get_the_ID(), 'meta-url', true );

                  // Checks and displays the retrieved value
                  if( !empty( $meta_value ) ) {
                      echo $meta_value;
                  }

              ?>" class="cadre_video fancybox fancybox.iframe">

        <img src="

          <?php

                  // Retrieves the stored value from the database
                  $meta_value = get_post_meta( get_the_ID(), 'meta-image', true );

                  // Checks and displays the retrieved value
                  if( !empty( $meta_value ) ) {
                      echo $meta_value;
                  }

            ?>" />

        <div class="titre_cadre_video_presentation">Présentation</div>
        <div class="legende_cadre_video_presentation">
          <?php

                  // Retrieves the stored value from the database
                  $meta_value = get_post_meta( get_the_ID(), 'meta-text', true );

                  // Checks and displays the retrieved value
                  if( !empty( $meta_value ) ) {
                      echo $meta_value;
                  }

          ?>

        </div>
        <div class="bouton_lecture_video"></div>
      </a>

      <!--
      -->
      <a href="000.php" class="cadre_quiz">

              <div class="vignette_quiz">
              QUIZ<br />
              Testez vos connaissances<br />
              sur les métiers<br />
              de la petite enfance !
              <div class="bouton_quiz">Démarrer</div>
            </div>
            <div class="picto_quiz"></div>
      </a>
    </div>
  </div><!-- Fin container -->
</div><!-- Fin bande -->
<!-- DECOUPE PHP - Fin de "inc_additionnelle2" - début de "inc_recherche_carte" -->


<!-- TEMPLATE PART STORE LOCATION-->

  <?php get_template_part('./template-parts/content', 'store-location'); ?>

<!-- END TEMPLATE PART STORE LOCATION-->


<?php get_footer(); ?>
