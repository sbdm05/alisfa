<!DOCTYPE html>
<!--[if lt IE 7]><html lang="fr-FR" class="ie6 oldie"><![endif]-->
<!--[if IE 7]><html lang="fr-FR" class="ie7 oldie"><![endif]-->
<!--[if IE 8]><html lang="fr-FR" class="ie8 oldie"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> >
<!--<![endif]-->

<head>

<meta http-equiv="Content-language" content="fr" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> » <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="language" content="fr" />
<meta name="copyright" content="MA SOCIETE" />
<meta name="author" content="&copy; MA SOCIETE" />
<meta name="designer" content="obea.fr" />
<meta name="robots" content="index,follow" />
<meta name="date-creation-yyyymmdd" content="20170405" />

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon et CSS
================================================== -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link type="image/x-icon" rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
<link type="text/css" rel="stylesheet" id="base-css" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
<link type="text/css" rel="stylesheet" id="structure-css" href="<?php echo get_template_directory_uri(); ?>/css/structure.css">
<link type="text/css" rel="stylesheet" id="styles-css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" media="all" />
<link type="text/css" rel="stylesheet" id="editor-style-css" href="<?php echo get_template_directory_uri(); ?>/css/editor-style.css" media="all" />
<link type="text/css" rel="stylesheet" id="rwd-css" href="<?php echo get_template_directory_uri(); ?>/css/rwd.css" media="all" />
<link type="text/css" rel="stylesheet" id="smartmenus-css" href="<?php echo get_template_directory_uri(); ?>/css/smartmenus.css" />
<link type="text/css" rel="stylesheet" id="impression-css" href="<?php echo get_template_directory_uri(); ?>/css/impression.css" media="print" />
<link type="text/css" rel="stylesheet" id="fancybox-css" href="<?php echo get_template_directory_uri(); ?>/javascript/jquery_lib/fancybox/jquery.fancybox.css" media="screen" />

<!-- Javascripts
================================================== -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/javascript/jquery_lib/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/javascript/jquery_lib/jquery-migrate.min.js?ver=1.4.1'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='javascript/html5_activation/html5shiv/html5-shiv-v3.7.2/html5shiv.min.js'></script>
<![endif]-->
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="javascript/html5_activation/selectivizr/selectivizr-1.0.2/selectivizr-min.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/standard.js"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/javascript/html5_activation/placeholder_jquery/placeholders.jquery.min.js'></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/jquery_lib/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/jquery_lib/repliable.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/jquery_lib/jquery.smartmenus.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/jquery_lib/jquery.smartmenus-addon.js"></script>

<script type="text/javascript">
  jQuery.noConflict();
  jQuery(document).ready(function(){

    jQuery('.fancybox').fancybox({
      padding : 0,
      margin  : 20,
      maxWidth: 9999,
      maxHeight: 9999,
      fitToView: true,
      width: 960,
      height: 540,
      autoSize: true,
      closeClick: false,
      openEffect: 'none',
      closeEffect: 'none'
    });

    jQuery('#main-menu').smartmenus({
      showTimeout: 0,
      subMenusSubOffsetX: 0,
      subMenusSubOffsetY: 0,
      subIndicatorsText:  '+',
      subMenusMinWidth: '245px',
      subMenusMaxWidth: '360px'
    });

    jQuery('a[href^="#"]').click(function() {
      var id = jQuery(this).attr("href");
      var offset = jQuery(id).offset().top
      jQuery('html, body').animate({scrollTop: offset}, 1000);
      return false;
    });

  });
</script>

</head>


<body id="">
<div class="container">
  <header id="haut_page">
    <div id="utiles_header">

      <?php if(get_theme_mod('lien_fb', 'http://www.facebook.fr') !=''): ?>

          <a href="<?php echo get_theme_mod('lien_fb', 'http://www.facebook.fr'); ?>" id="facebook_header">
          </a>

      <?php endif; ?>

      <?php if(get_theme_mod('lien_video', 'http://www.youtube.fr') !=''): ?>

          <a href="<?php echo get_theme_mod('lien_video', 'http://www.youtube.fr'); ?>" id="video_header">
          </a>

      <?php endif; ?>

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

<?php if (!is_front_page()): ?>
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
<?php endif; ?>
