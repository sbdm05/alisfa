<?php
/**
 * Template Name: Présentation de la Branche

 */
get_header(); ?>




<body id="">
<div class="container">
  <header id="haut_page">
    <div id="utiles_header">
      <a href="000.php" id="facebook_header"></a><a href="000.php" id="video_header"></a>
    </div>
    <div id="logo"><a href="<?php the_permalink(); ?>">Les métiers <strong>de la petite enfance</strong></a></div>
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
          <?php the_breadcrumb(); ?>
        </div>
      </div><!-- Fin barrePage -->
<!-- DECOUPE PHP - Fin de "inc_barrepage" - début du contenu principal -->
      <!-- Colonne principale -->
      <section class="colonne unique">
        <div id="main">
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </section><!-- Fin colonne principale -->
<!-- DECOUPE PHP - Fin du contenu principal - début de "inc_fermeture_page (container et bande)" -->
    </div><!-- Fin page -->
  </div><!-- Fin container -->
</div><!-- Fin bande -->
<!-- DECOUPE PHP - Fin de "inc_fermeture_page (container et bande)" - début de "inc_additionnelle_chiffres" -->
<div class="bande bande_grise">
  <div class="container">
    <div class="enveloppe">
      <h1>Chiffres clés</h1>
      <div id="chiffres_cles">
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/chiffres-structures.png" alt="+ de 3700 structures" /></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/chiffres-etp.png" alt="31000 salariés ETP" /></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/chiffres-cdi.png" alt="58% de CDI" /></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/chiffres-temps_complet.png" alt="36% de temps complet" /></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/chiffres-femmes.png" alt="84% de femmes" /></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/chiffres-dedies.png" alt="39% de salariés dédiés" /></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/chiffres-animateurs.png" alt="42% d'animateurs" /></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/images/chiffres-formation.png" alt="38500 formations" /></figure>
      </div>
    </div>
  </div><!-- Fin container -->
</div><!-- Fin bande -->

<?php get_footer(); ?>
