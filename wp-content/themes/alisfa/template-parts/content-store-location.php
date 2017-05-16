<script type="text/javascript">


var element = document.getElementById("carte_id");
element.classList.add("saisie_recherche_carte");

</script>


<div class="bande bande_recherche_carte">
  <div class="container">
    <div class="titre_recherche_carte">
      Les structures de la branche près de chez vous
    </div>
  </div>


  <div id="carte_id" class="carte">
  <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
  </div>

    <div class="saisie_recherche_carte">

      <!--<img src="images/carte_google.jpg" />-->

    </div>




    <!--<form>
      <label for="ville">Nom de votre ville ou code postal</label>
      <input name="ville" id="ville" type="text" />
      <input type="submit" value="" />
    </form>-->

</div><!-- Fin bande -->
<!-- DECOUPE PHP - Fin de "inc_recherche_carte" - début de "inc_bas" -->


