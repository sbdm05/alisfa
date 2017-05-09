<?php
/**
 * resumy Theme Customizer
 *
 * @package alisfa
 */


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function alisfa_customize_register( $wp_customize ) {
  $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
  $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}
add_action( 'customize_register', 'alisfa_customize_register' );


/**
 Adds Alisfa Options : section dispo
 */

function alisfa_customizer_options($wp_customize){
  //Section Diaporama
  $wp_customize-> add_section('diapo', array(
    'title'      => __('Diaporama', 'alisfa'),
    'description' => sprintf(__('Modifier ici les images', 'alisfa')),
     'priority'=>1,
    ));
                  //Grand Titre 1 Setting
                  $wp_customize->add_setting('diapo_gd_titre_1', array(
                  'default'=>sprintf(__('Titre 1', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  //Grand Titre 1 Control
                  $wp_customize->add_control('diapo_gd_titre_1', array(
                  'label' =>__('Titre Image 1', 'alisfa'),
                  'section'=>'diapo',
                  'priority' =>2
                  ));
                   //Sous Titre Setting
                  $wp_customize->add_setting('diapo_ss_titre_1', array(
                  'default'=>sprintf(__('Sous-titre. Omnis reniet venis et aceprovitam quam andaeri onsequiate dolorem. Duciant quaturiam sedi core.', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  //Grand Titre Control
                  $wp_customize->add_control('diapo_ss_titre_1', array(
                  'label' =>__('Sous-titre Image 1', 'alisfa'),
                  'section'=>'diapo',
                  'type'     => 'textarea',
                  'priority' =>3
                  ));
                  //Image 1 Setting
                  $wp_customize->add_setting('diapo_image_1', array(
                  'default'=> get_template_directory_uri().'/images/carrousel-01.jpg',
                  'type'=>'theme_mod', //can be option or theme mod
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));

                  //Image 1 Control
                  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'diapo_image_1', array(
                    'label'    => __('Image 1', 'alisfa'),
                    'section' => 'diapo',
                    'settings'=> 'diapo_image_1',
                    'priority'=>4
                   )));

                  //Bouton Diapo 1 Setting
                  $wp_customize->add_setting('diapo_bouton_titre_1', array(
                  'default'=>sprintf(__('DECOUVRIR', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  //Grand Titre Control
                  $wp_customize->add_control('diapo_bouton_titre_1', array(
                  'label' =>__('Titre du Bouton', 'alisfa'),
                  'section'=>'diapo',
                  'priority' =>5
                  ));

                  // Lien Bouton video 1 Setting
                  $wp_customize->add_setting('diapo_bouton_lien_1', array(
                  'default'=>__('https://www.google.fr/', 'alisfa'),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Lien Bouton video 1  Control
                  $wp_customize->add_control('diapo_bouton_lien_1', array(
                  'label' =>__('Lien Bouton 1', 'alisfa'),
                  'section'=>'diapo',
                  'priority' =>6
                  ));

                  ////////////IMAGE 2
                  ///
                  //Grand Titre 2 Setting
                  $wp_customize->add_setting('diapo_gd_titre_2', array(
                  'default'=>sprintf(__('Titre 2', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  //Grand Titre 1 Control
                  $wp_customize->add_control('diapo_gd_titre_2', array(
                  'label' =>__('Titre Image 2', 'alisfa'),
                  'section'=>'diapo',
                  'priority' =>7
                  ));
                   //Sous Titre Setting
                  $wp_customize->add_setting('diapo_ss_titre_2', array(
                  'default'=>sprintf(__('Sous-titre. Omnis reniet venis et aceprovitam quam andaeri onsequiate dolorem. Duciant quaturiam sedi core.', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  //Grand Titre Control
                  $wp_customize->add_control('diapo_ss_titre_2', array(
                  'label' =>__('Sous-titre Image 2', 'alisfa'),
                  'section'=>'diapo',
                  'type'     => 'textarea',
                  'priority' =>8
                  ));
                  //Image 1 Setting
                  $wp_customize->add_setting('diapo_image_2', array(
                  'default'=> get_template_directory_uri().'/images/carrousel-02.jpg',
                  'type'=>'theme_mod', //can be option or theme mod
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));

                  //Image 1 Control
                  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'diapo_image_2', array(
                    'label'    => __('Image 2', 'alisfa'),
                    'section' => 'diapo',
                    'settings'=> 'diapo_image_2',
                    'priority'=>9
                   )));

                  //Bouton Diapo 1 Setting
                  $wp_customize->add_setting('diapo_bouton_titre_2', array(
                  'default'=>sprintf(__('DECOUVRIR', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  //Grand Titre Control
                  $wp_customize->add_control('diapo_bouton_titre_2', array(
                  'label' =>__('Titre du Bouton', 'alisfa'),
                  'section'=>'diapo',
                  'priority' =>10
                  ));

                  // Lien Bouton video 1 Setting
                  $wp_customize->add_setting('diapo_bouton_lien_2', array(
                  'default'=>__('https://www.google.fr/', 'alisfa'),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Lien Bouton video 1  Control
                  $wp_customize->add_control('diapo_bouton_lien_2', array(
                  'label' =>__('Lien Bouton 2', 'alisfa'),
                  'section'=>'diapo',
                  'priority' =>11
                  ));





    $wp_customize-> add_section('video1', array(
    'title'      => __('Vidéo 1', 'alisfa'),
    'description' => sprintf(__('Modifier les vidéos ici', 'alisfa')),
     'priority'=>2,
    ));
                  // Témoignage 1 Setting
                  $wp_customize->add_setting('temoignage_nom_1', array(
                  'default'=>sprintf(__('Damien, animateur', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage 1 Control
                  $wp_customize->add_control('temoignage_nom_1', array(
                  'label' =>__('Titre Vidéo 1', 'alisfa'),
                  'section'=>'video1',
                  'priority' =>1
                  ));

                  // Témoignage description 1 Setting
                  $wp_customize->add_setting('temoignage_description_1', array(
                  'default'=>sprintf(__('Damien, accus magnatur, ut aut que idenet raecum qui omnit hilluta nonsecae repel ipidunt quod ma dolescit ute moluptatum quo velit', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage description 1  Control
                  $wp_customize->add_control('temoignage_description_1', array(
                  'label' =>__('Description Vidéo 1', 'alisfa'),
                  'section'=>'video1',
                  'type'     => 'textarea',
                  'priority' =>2
                  ));

                  // Témoignage video 1 Setting
                  $wp_customize->add_setting('temoignage_lien_1', array(
                  'default'=>get_template_directory_uri().'/video/video-01.mp4',
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage video 1  Control
                  $wp_customize->add_control('temoignage_lien_1', array(
                  'label' =>__('Lien Vidéo 1', 'alisfa'),
                  'section'=>'video1',
                  'priority' =>3
                  ));
                  // Image Vidéo 1 Setting
                  $wp_customize->add_setting('image_video_1', array(
                  'default'=> get_template_directory_uri().'/video/vignette_video-01.jpg',
                  'type'=>'theme_mod', //can be option or theme mod
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));

                  // Image Vidéo 1 Control
                  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_video_1', array(
                    'label'    => __('Image Vidéo 1', 'alisfa'),
                    'section' => 'video1',
                    'settings'=> 'image_video_1',
                    'priority'=>4
                   )));

$wp_customize-> add_section('video2', array(
    'title'      => __('Vidéo 2', 'alisfa'),
    'description' => sprintf(__('Modifier la vidéo ici', 'alisfa')),
     'priority'=>3,
    ));
                  // Témoignage 1 Setting
                  $wp_customize->add_setting('temoignage_nom_2', array(
                  'default'=>sprintf(__('Anne, Directrice', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage 1 Control
                  $wp_customize->add_control('temoignage_nom_2', array(
                  'label' =>__('Titre Vidéo 2', 'alisfa'),
                  'section'=>'video2',
                  'priority' =>1
                  ));

                  // Témoignage description 1 Setting
                  $wp_customize->add_setting('temoignage_description_2', array(
                  'default'=>sprintf(__('Anne, accus magnatur, ut aut que idenet raecum qui omnit hilluta nonsecae repel ipidunt quod ma dolescit ute moluptatum quo velit.', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage description 1  Control
                  $wp_customize->add_control('temoignage_description_2', array(
                  'label' =>__('Description Vidéo 2', 'alisfa'),
                  'section'=>'video2',
                  'type'     => 'textarea',
                  'priority' =>2
                  ));

                  // Témoignage video 1 Setting
                  $wp_customize->add_setting('temoignage_lien_2', array(
                  'default'=>get_template_directory_uri().'/video/video-01.mp4',
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage video 1  Control
                  $wp_customize->add_control('temoignage_lien_2', array(
                  'label' =>__('Lien Vidéo 2', 'alisfa'),
                  'section'=>'video2',
                  'priority' =>3
                  ));
                  // Image Vidéo 1 Setting
                  $wp_customize->add_setting('image_video_2', array(
                  'default'=> get_template_directory_uri().'/video/vignette_video-05.jpg',
                  'type'=>'theme_mod', //can be option or theme mod
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));

                  // Image Vidéo 1 Control
                  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_video_2', array(
                    'label'    => __('Image Vidéo 2', 'alisfa'),
                    'section' => 'video2',
                    'settings'=> 'image_video_2',
                    'priority'=>4
                   )));

$wp_customize-> add_section('video3', array(
    'title'      => __('Vidéo 3', 'alisfa'),
    'description' => sprintf(__('Modifier la vidéo ici', 'alisfa')),
     'priority'=>4,
    ));
                  // Témoignage 1 Setting
                  $wp_customize->add_setting('temoignage_nom_3', array(
                  'default'=>sprintf(__('Loïc, auxiliaire de puériculture', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage 1 Control
                  $wp_customize->add_control('temoignage_nom_3', array(
                  'label' =>__('Titre Vidéo 3', 'alisfa'),
                  'section'=>'video3',
                  'priority' =>1
                  ));

                  // Témoignage description 1 Setting
                  $wp_customize->add_setting('temoignage_description_3', array(
                  'default'=>sprintf(__('Loïc, accus magnatur, ut aut que idenet raecum qui omnit hilluta nonsecae repel ipidunt quod ma dolescit ute moluptatum quo velit.', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage description 1  Control
                  $wp_customize->add_control('temoignage_description_3', array(
                  'label' =>__('Description Vidéo 3', 'alisfa'),
                  'section'=>'video3',
                  'type'     => 'textarea',
                  'priority' =>2
                  ));

                  // Témoignage video 1 Setting
                  $wp_customize->add_setting('temoignage_lien_3', array(
                  'default'=>get_template_directory_uri().'/video/video-01.mp4',
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage video 1  Control
                  $wp_customize->add_control('temoignage_lien_3', array(
                  'label' =>__('Lien Vidéo 3', 'alisfa'),
                  'section'=>'video3',
                  'priority' =>3
                  ));
                  // Image Vidéo 1 Setting
                  $wp_customize->add_setting('image_video_3', array(
                  'default'=> get_template_directory_uri().'/video/vignette_video-05.jpg',
                  'type'=>'theme_mod', //can be option or theme mod
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));

                  // Image Vidéo 1 Control
                  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_video_3', array(
                    'label'    => __('Image Vidéo 3', 'alisfa'),
                    'section' => 'video3',
                    'settings'=> 'image_video_3',
                    'priority'=>4
                   )));

$wp_customize-> add_section('video4', array(
    'title'      => __('Vidéo 4', 'alisfa'),
    'description' => sprintf(__('Modifier la vidéo ici', 'alisfa')),
     'priority'=>4,
    ));
                  // Témoignage 1 Setting
                  $wp_customize->add_setting('temoignage_nom_4', array(
                  'default'=>sprintf(__('Claire, éducatrice de jeunes enfants', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage 1 Control
                  $wp_customize->add_control('temoignage_nom_4', array(
                  'label' =>__('Titre Vidéo 4', 'alisfa'),
                  'section'=>'video4',
                  'priority' =>1
                  ));

                  // Témoignage description 1 Setting
                  $wp_customize->add_setting('temoignage_description_4', array(
                  'default'=>sprintf(__('Claire, accus magnatur, ut aut que idenet raecum qui omnit hilluta nonsecae repel ipidunt quod ma dolescit ute moluptatum quo velit.', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage description 1  Control
                  $wp_customize->add_control('temoignage_description_4', array(
                  'label' =>__('Description Vidéo 4', 'alisfa'),
                  'section'=>'video4',
                  'type'     => 'textarea',
                  'priority' =>2
                  ));

                  // Témoignage video 1 Setting
                  $wp_customize->add_setting('temoignage_lien_4', array(
                  'default'=>get_template_directory_uri().'/video/video-01.mp4',
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Témoignage video 1  Control
                  $wp_customize->add_control('temoignage_lien_4', array(
                  'label' =>__('Lien Vidéo 3', 'alisfa'),
                  'section'=>'video4',
                  'priority' =>3
                  ));
                  // Image Vidéo 1 Setting
                  $wp_customize->add_setting('image_video_4', array(
                  'default'=> get_template_directory_uri().'/video/vignette_video-01.jpg',
                  'type'=>'theme_mod', //can be option or theme mod
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));

                  // Image Vidéo 1 Control
                  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_video_4', array(
                    'label'    => __('Image Vidéo 4', 'alisfa'),
                    'section' => 'video4',
                    'settings'=> 'image_video_4',
                    'priority'=>4
                   )));

$wp_customize-> add_section('liens_sociaux', array(
    'title'      => __('Liens Sociaux', 'alisfa'),
    'description' => sprintf(__('Ajouter vos liens sociaux ici', 'alisfa')),
     'priority'=>4,
    ));
                  // Lien Facebook Setting
                  $wp_customize->add_setting('lien_fb', array(
                  'default'=>sprintf(__('http://www.facebook.com', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Lien Facebook Control
                  $wp_customize->add_control('lien_fb', array(
                  'label' =>__('Lien Facebook', 'alisfa'),
                  'section'=>'liens_sociaux',
                  'priority' =>1
                  ));

                  // Lien Vidéo Setting
                  $wp_customize->add_setting('lien_video', array(
                  'default'=>sprintf(__('http://www.youtube.com', 'alisfa')),
                  'type'=>'theme_mod',
                  'sanitize_callback' =>  'alisfa_text_sanitize',
                  ));
                  // Lien Facebook Control
                  $wp_customize->add_control('lien_video', array(
                  'label' =>__('Lien Vidéo', 'alisfa'),
                  'section'=>'liens_sociaux',
                  'priority' =>1
                  ));

}

add_action('customize_register', 'alisfa_customizer_options');

/**
 * Sanitize 'alisfa_text_sanitize'.
 *
 */
function alisfa_text_sanitize ( $input ) {
  return wp_kses_post (force_balance_tags ($input));
}











