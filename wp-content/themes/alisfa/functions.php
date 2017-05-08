<?php
/**
 * alisfa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alisfa
 */


if ( ! function_exists( 'alisfa_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function alisfa_setup() {
  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on resumy, use a find and replace
   * to change 'resumy' to the name of your theme in all the template files.
   */
  load_theme_textdomain( 'alisfa', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );


  /*
   * This theme styles the visual editor to resemble the theme style,
   * specifically font, colors, and column width.
   */
  add_editor_style( 'css/editor-style.css' );



  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support( 'post-thumbnails' );


  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'menu-1'           => esc_html__( 'Principal', 'alisfa' ),
    'menu-footer-branche' => esc_html__( 'Menu Présentation Branche', 'alisfa' ),
    'menu-footer-secteur' => esc_html__( 'Menu Découvrir le Secteur', 'alisfa' ),
    'menu-footer-metiers' => esc_html__( 'Menu Métiers Petite Enfance', 'alisfa' ),

  ) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

}
endif;
add_action( 'after_setup_theme', 'alisfa_setup' );


/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function alisfa_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Témoignages Fiche Métier Barre Latérale', 'alisfa' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Ajouter un widget Texte ici.', 'alisfa' ),
    'before_widget' => '<div class="temoignages_sb2">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="temoignages_titre_sb2">',
    'after_title'   => '</div>',
  ) );

    register_sidebar( array(
    'name'          => __( 'Présentation Fiche Métier Barre Latérale', 'alisfa' ),
    'id'            => 'sidebar-2',
    'description'   => __( 'Ajouter un widget Texte ici.', 'alisfa' ),
    'before_widget' => '<div class="presentation_sb2">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="presentation_titre_sb2">',
    'after_title'   => '</div>',
  ) );

    register_sidebar( array(
    'name'          => __( 'Bouton Quizz Barre Latérale', 'alisfa' ),
    'id'            => 'sidebar-3',
    'description'   => __( 'Ajouter un widget Texte ici.', 'alisfa' ),
     'before-widget'=> '<a class="bouton_quiz_sb2">',
    'after_widget'  => '</a>',
  ) );
    register_sidebar( array(
    'name'          => __( 'Footer Gauche', 'alisfa' ),
    'id'            => 'footer-gauche',
    'description'   => __( 'Ajouter votre menu ici', 'alisfa' ),
    'before_title'  => '<a>',
    'items_spacing' => 'discard'
  ) );



}
add_action( 'widgets_init', 'alisfa_widgets_init' );


/**
 * Add BreadCrumbs
 */
function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<a href="';
        echo get_option('home');
        echo '">';
        echo __( 'Accueil', 'alisfa' );
        echo '</a><li class="separator"> / </li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> / </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> / </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'<li class="separator"> / </li></a>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<strong> '.get_the_title().'</strong>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}


/**
 * Enqueue scripts and styles.
 */

function alisfa_scripts() {
  wp_enqueue_script( 'meta-box-image', get_template_directory_uri() . '/inc/meta-box-image.js', array( 'jquery' ), '20150330', true );
}
add_action( 'wp_enqueue_scripts', 'alisfa_scripts' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/meta-boxes.php';






















