<?php
/**
 * Template Name: Présentation des métiers

 */
get_header(); ?>




<body id="">
<div class="container">
  <header id="haut_page">
    <div id="utiles_header">
      <a href="000.php" id="facebook_header"></a><a href="000.php" id="video_header"></a>
    </div>
    <div id="logo"><a href="<?php echo site_url(); ?>">Les métiers <strong>de la petite enfance</strong></a></div>
  </header>
</div>

<div class="container">
  <!-- Menu principal -->
  <nav id="main-nav" role="navigation">

    <!-- Bouton bascule pour mobile (hamburger/x icon) -->
    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state"><span class="main-menu-btn-icon"></span>Bascule d'affichage du menu</label>

    <!-- Sample menu definition -->
 <?php
      wp_nav_menu( array(
      'theme_location' => 'menu-1',
      'menu_id'        => 'main-menu',
      'menu_class'     =>'sm sm-blue',
      'container'     => 'ul'
      ));
      ?>
  </nav>
</div>

<div class="bande">
  <div class="container">
    <!-- Contenu de la page -->
    <div id="page" class="">
<!-- DECOUPE PHP - Fin de "inc_haut - début de "inc_barrepage" -->
      <div id="barrePage">
        <div id="chemin">
          <a href="index.php">Accueil /</a> <a href="000.php">Chemin /</a> Page actuel
        </div>
      </div><!-- Fin barrePage -->
<!-- DECOUPE PHP - Fin de "inc_barrepage" - début du contenu principal -->
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