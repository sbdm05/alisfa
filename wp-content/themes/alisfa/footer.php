<!-- Pied de page -->
<div class="container">
  <footer>
    <div class="titre_footer">Les métiers <strong>de la petite enfance</strong></div>
    <div id="utiles_footer">
      <a href="000.php" id="facebook_footer"></a><a href="000.php" id="video_footer"></a>
    </div>
  <div id="menuAnnexe1">
        <?php
      wp_nav_menu( array(
      'theme_location' => 'menu-footer-branche',
      'menu_id'        => 'menuAnnexe1',
      'container'     => 'footer',


      ));
      ?>

        <li><a href="000.php">Mentions légales</a></li>
      </ul>
    </div>
    <div id='menuAnnexe2'>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_cpnef_footer.jpg" alt="CPNEF" /></a><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_rf_footer.jpg" alt="RF" /></a><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_uniformation_footer.jpg" alt="Uniformation" /></a>
    </div>
  </footer>
</div><!-- Fin container -->
 <?php wp_footer(); ?>
</body>
</html>
