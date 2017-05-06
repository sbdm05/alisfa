<?php
/**
 * Adds a meta box to the post editing screen
 */

function prfx_custom_meta(){
  global $post;
    if ( 'page_fiche_metier.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
    add_meta_box( 'prfx_meta', __( 'Vidéo Présentation Bas de Page', 'prfx-textdomain' ), 'prfx_meta_callback', 'page' );
  }
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );



/**
 * Outputs the content of the meta box
 */
function prfx_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID );
    ?>

    <p>
        <label for="meta-text" class="prfx-row-title"><?php _e( 'Titre', 'prfx-textdomain' )?></label>
        <input type="text" name="meta-text" id="meta-text" value="<?php if ( isset ( $prfx_stored_meta['meta-text'] ) ) echo $prfx_stored_meta['meta-text'][0]; ?>" />
    </p>


      <p>
        <label for="meta-url" class="prfx-row-title"><?php _e( 'URL', 'prfx-textdomain' )?></label>
        <input type="text" name="meta-url" id="meta-url" value="<?php if ( isset ( $prfx_stored_meta['meta-url'] ) ) echo $prfx_stored_meta['meta-url'][0]; ?>" />
    </p>

    <p>
        <label for="meta-image" class="prfx-row-title"><?php _e( 'Example File Upload', 'prfx-textdomain' )?></label>
        <input type="text" name="meta-image" id="meta-image" value="<?php if ( isset ( $prfx_stored_meta['meta-image'] ) ) echo $prfx_stored_meta[
        'meta-image'][0]; ?>" />
        <input type="button" id="meta-image-button" class="button" value="<?php _e( 'Choisir un fichier', 'prfx-textdomain' )?>" />
    </p>

        <div>
          <img src="<?php echo $prfx_stored_meta['meta-image'][0]; ?>" style="max-width: 250px;">
        </div>

    <?php
}

/**
 * Saves the custom meta input
 */
function prfx_meta_save( $post_id ) {

    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

    // Titre Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'meta-text' ] ) ) {
        update_post_meta( $post_id, 'meta-text', sanitize_text_field( $_POST[ 'meta-text' ] ) );
    }


    // URL Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'meta-url' ] ) ) {
        update_post_meta( $post_id, 'meta-url', sanitize_text_field( $_POST[ 'meta-url' ] ) );
    }

    if( isset( $_POST[ 'meta-image' ] ) ) {
    update_post_meta( $post_id, 'meta-image', $_POST[ 'meta-image' ] );
    }

}
add_action( 'save_post', 'prfx_meta_save' );

/**
 * Loads the image management javascript
 */
function prfx_image_enqueue() {
    global $typenow;
    if( $typenow == 'page' ) {
        wp_enqueue_media();

        // Registers and enqueues the required javascript.
        wp_register_script( 'meta-box-image', get_template_directory_uri() . '/inc/meta-box-image.js', array( 'jquery' ) );
        wp_localize_script( 'meta-box-image', 'meta_image',
            array(
                'title' => __( 'Choose or Upload an Image', 'prfx-textdomain' ),
                'button' => __( 'Use this image', 'prfx-textdomain' ),
            )
        );
        wp_enqueue_script( 'meta-box-image');
    }
}
add_action( 'admin_enqueue_scripts', 'prfx_image_enqueue' );






