<?php
/**
 * Saros Theme Options
 *
 * @package Saros
 */

/**
 * Theme Options personal social links, email and phone number
 *
 */

    function add_theme_menu_item() {
        add_menu_page(
            "saros Settings",
            "Social Profiles",
            "manage_options",
            "saros-options",
            "saros_options_settings",
            "dashicons-businessperson",
            99
        );
    }

    // Action for Saros Setting Menu
    add_action( 'admin_menu', 'add_theme_menu_item' );
    function saros_options_settings() { ?>
        <div class="wrap saros-theme-options">
            <h1>A Saros Settings</h1>
            <form method="post" action="options.php">
                <?php
                    do_settings_sections( 'saros-theme-options' );
                    settings_fields( 'saros-options' );
                    submit_button();
                ?>
            </form>
        </div>
    <?php }

    /**
     * Email/ Phone
     * & Social profiles
     */

    function email() {
        $email = get_option('email'); ?>
        <input type="email" class="regular-text" name="email" id="email" value="<?php echo $email; ?>" placeholder="Primary email address" />
    <?php  }

    function phone() {
        $phone = get_option('phone'); ?>
        <input type="text" class="regular-text" name="phone" id="phone" value="<?php echo $phone; ?>" placeholder="Mobile/ Phone" />
        <p style="margin-bottom: 20px;"></p>
    <?php  }

    function angelco() {
        $angelco = get_option('angelco'); ?>
        <input type="text" class="regular-text" name="angelco" id="angelco" value="<?php echo $angelco; ?>" placeholder="https://angel.co/username" />
    <?php  }

    function github() {
        $angelco = get_option('github'); ?>
        <input type="text" class="regular-text" name="github" id="github" value="<?php echo $github; ?>" placeholder="https://github.com/username" />
    <?php  }

    function dribbble() {
        $angelco = get_option('dribbble'); ?>
        <input type="text" class="regular-text" name="dribbble" id="dribbble" value="<?php echo $dribbble; ?>" placeholder="https://dribbble.com/username" />
    <?php  }

    function linkedin() {
        $linkedIn = get_option('linkedin'); ?>
        <input type="text" class="regular-text" name="linkedin" id="linkedin" value="<?php echo $linkedIn; ?>" placeholder="https://linkedin.com/username" />
    <?php  }

    function twitter() { 
        $twitter = get_option('twitter'); ?>
        <input type="text" class="regular-text" name="twitter" id="twitter" value="<?php echo $twitter; ?>" placeholder="https://twitter.com/username" />
    <?php }

    function instagram() {
        $instagram = get_option('instagram'); ?>
        <input type="text" class="regular-text" name="instagram" id="instagram" value="<?php echo $instagram; ?>" placeholder="https://instagram.com/username" />
    <?php  }
    function facebook() {
        $facebook = get_option('facebook'); ?>
        <input type="text" class="regular-text" name="facebook" id="facebook" value="<?php echo $facebook; ?>" placeholder="https://facebook.com/username" />
    <?php  }
    function vimeo() {
        $vimeo = get_option('vimeo'); ?>
        <input type="text" class="regular-text" name="vimeo" id="vimeo" value="<?php echo $vimeo; ?>" placeholder="https://vimeo.com/username" />
    <?php  }
    function youtube() {
        $youtube = get_option('youtube'); ?>
        <input type="text" class="regular-text" name="youtube" id="youtube" value="<?php echo $youtube; ?>" placeholder="https://youtube.com/username" />
    <?php  }


    /**
     * 
     * Add Fields & Register
     */

    add_action( 'admin_init', 'saros_options_contact' );
    function saros_options_contact() {
        // Heading
        add_settings_section( "saros-options", "Social Media LInks", null, "saros-theme-options" );

        /**
         * Added Fields & Registered
         */
        add_settings_field( "email", "Email address", "email", "saros-theme-options", "saros-options" );
        add_settings_field( "phone", "Phone number", "phone", "saros-theme-options", "saros-options" );
        add_settings_field( "angelco", "Angel Co", "angelco", "saros-theme-options", "saros-options" );
        add_settings_field( "github", "Github", "github", "saros-theme-options", "saros-options" );
        add_settings_field( "dribbble", "Dribbble", "dribbble", "saros-theme-options", "saros-options" );
        add_settings_field( "linkedin", "LinkedIn", "linkedin", "saros-theme-options", "saros-options" );
        add_settings_field( "twitter", "Twitter", "twitter", "saros-theme-options", "saros-options" );
        add_settings_field( "instagram", "Instagram", "instagram", "saros-theme-options", "saros-options" );
        add_settings_field( "facebook", "Facebook", "facebook", "saros-theme-options", "saros-options" );
        add_settings_field( "vimeo", "Vimeo", "vimeo", "saros-theme-options", "saros-options" );
        add_settings_field( "youtube", "Youtube", "youtube", "saros-theme-options", "saros-options" );

        // Registerd each fields
        register_setting("saros-options", "email");
        register_setting("saros-options", "phone");
        register_setting("saros-options", "angelco");
        register_setting("saros-options", "github");
        register_setting("saros-options", "dribbble");
        register_setting("saros-options", "linkedin");
        register_setting("saros-options", "twitter");
        register_setting("saros-options", "instagram");
        register_setting("saros-options", "facebook");
        register_setting("saros-options", "vimeo");
        register_setting("saros-options", "youtube");

    }    
?>
