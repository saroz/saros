<?php
/**
 * Saros activate plugins
 *
 * @package Saros
 */

/**
 * Install require plugins while activating the theme
 *
 */

    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    // activate pre-bundled plugins
    activate_plugin( 'limit-login-attempts-reloaded/limit-login-attempts-reloaded.php' );
    activate_plugin( 'autoptimize/autoptimize.php' );
    activate_plugin( 'contact-form-7/wp-contact-form-7.php' );
    activate_plugin( 'syntaxhighlighter/syntaxhighlighter.php' );
    activate_plugin( 'super-progressive-web-apps/superpwa.php' );



add_action('admin_notices', 'showAdminMessages');

function showAdminMessages() {
    $plugin_messages = array();
    $aRequired_plugins = array();

    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

    $aRequired_plugins = array(
      array(
         'name'      => 'Limit Login Attempts Reloaded',
         'download'  => 'https://downloads.wordpress.org/plugin/limit-login-attempts-reloaded.2.9.0.zip',
         'path'      => 'limit-login-attempts-reloaded/limit-login-attempts-reloaded.php'
      ),
      array(
         'name'      => 'Autoptimize',
         'download'  => 'https://downloads.wordpress.org/plugin/autoptimize.2.5.1.zip',
         'path'      => 'autoptimize/autoptimize.php'
      ),
      array(
         'name'      => 'Contact Form 7',
         'download'  => 'https://downloads.wordpress.org/plugin/contact-form-7.5.1.4.zip',
         'path'      => 'contact-form-7/wp-contact-form-7.php' 
      ),
      array(
         'name'      => 'Google Analytics Dashboard for WP (GADWP)',
         'download'  => 'https://downloads.wordpress.org/plugin/google-analytics-dashboard-for-wp.5.3.8.zip',
         'path'      => 'google-analytics-dashboard-for-wp/gadwp.php'
      ),
      array(
         'name'      => 'SyntaxHighlighter Evolved',
         'download'  => 'https://downloads.wordpress.org/plugin/syntaxhighlighter.zip',
         'path'      => 'syntaxhighlighter/syntaxhighlighter.php'
      ),
      array(
         'name'      => 'Super Progressive Web Apps',
         'download'  => 'https://downloads.wordpress.org/plugin/super-progressive-web-apps.zip',
         'path'      => 'super-progressive-web-apps/superpwa.php'
      )
    );

    
    foreach($aRequired_plugins as $aPlugin){
        // Check if plugin exists
        if(!is_plugin_active( $aPlugin['path'] )) {
            $plugin_messages[] = '<div class="notice notice-info is-dismissible"><p>This theme requires you to install the '.$aPlugin['name'].' plugin, download it from <a href="'.$aPlugin['download'].'">here</a>.</p></div>';
        }
    }

    if(count($plugin_messages) > 0) {
      echo '';
      foreach($plugin_messages as $message) {
         echo ''.$message.'';
      }
      echo '';
   }
}