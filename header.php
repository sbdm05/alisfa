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
<title><?php bloginfo('name'); ?></title>
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
