<?php
    /**
     * Download Link
     */

    // Markup for Downloadlink
    add_action( 'add_meta_boxes', 'custom_download_link' );
    function custom_download_link() {
        $post_types = array( 'post' );
        add_meta_box (
            'newdownload',
            'Download Link',
            'custom_download_markup',
            $post_types,
            'side',
            'high'
        );
    }

    function custom_download_markup($post) {
        wp_nonce_field( 'custom_download_link_nonce', 'custom_download_link_nonce' );
        $downloadlink = get_post_meta( $post->ID, 'download_link_key', true ); ?>
        <input name="download_id" id="download_id" type="number" value="<?php echo esc_attr( $downloadlink ); ?>" placeholder="1, 2, 3" />
    <?php }

/**
 * Save Masonary Media
 * - Masonary Media
 */
add_action( 'save_post', 'save_download_link' );
function save_download_link( $post_id ) {

	if ( ! isset( $_POST['custom_download_link_nonce'] ) ) { return; }
	if ( ! wp_verify_nonce( $_POST['custom_download_link_nonce'], 'custom_download_link_nonce' ) ) { return;}
	// Auto Save
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
	}
	// Permission
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) { return; }
    }
    else {
        if ( ! current_user_can( 'edit_post', $post_id ) ) { return; }
    }

    // SAVE VIDEO
    $downloadlink_id = $_POST['download_id'];
    update_post_meta( $post_id, 'download_link_key', $downloadlink_id );
}