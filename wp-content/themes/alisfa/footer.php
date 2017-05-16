<!-- Pied de page -->
<div class="container">
  <footer>
    <div class="titre_footer">Les métiers <strong>de la petite enfance</strong></div>
    <div id="utiles_footer">
       <?php if(get_theme_mod('lien_fb', 'http://www.facebook.fr') !=''): ?>

          <a href="<?php echo get_theme_mod('lien_fb', 'http://www.facebook.fr'); ?>" id="facebook_footer">
          </a>

      <?php endif; ?>

      <?php if(get_theme_mod('lien_video', 'http://www.youtube.fr') !=''): ?>

          <a href="<?php echo get_theme_mod('lien_video', 'http://www.youtube.fr'); ?>" id="video_footer">
          </a>

      <?php endif; ?>

    </div>
  <div id="menuAnnexe1">
        <?php
      wp_nav_menu( array(
      'theme_location' => 'menu-footer-branche',
      'menu_id'        => 'menuAnnexe1',
      'container'     => 'footer',


      ));
      ?>

        <li><center><a href="000.php">Mentions légales</a></center></li>
      </ul>
    </div>
    <div id='menuAnnexe2'>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_cpnef_footer.jpg" alt="CPNEF" /></a><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_rf_footer.jpg" alt="RF" /></a><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_uniformation_footer.jpg" alt="Uniformation" /></a>
    </div>
  </footer>
</div><!-- Fin container -->
 <?php wp_footer(); ?>

<script src="//code.jquery.com/jquery-latest.js"></script>
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.5/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>


</body>
</html>
