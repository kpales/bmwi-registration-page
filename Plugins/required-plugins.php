<?php

$class_plugin_activation_path = dirname(__FILE__) . '/class-tgm-plugin-activation.php';

if( ! file_exists($class_plugin_activation_path) ){
    return;
}

require_once $class_plugin_activation_path;

/**
 * Register the required plugins for this theme.
 *
 */
if( ! function_exists('theme_register_required_plugins') ){
    add_action( 'tgmpa_register', 'theme_register_required_plugins' );
    function theme_register_required_plugins() {
        /**
         * Array of plugin arrays. Required keys are name and slug.
         * If the source is NOT from the .org repo, then source is also required.
         */
        $plugins = array(

            // starter Hub

/*            array(
                'name'     				=> 'Purgatorio', // The plugin name
                'slug'     				=> 'purgatorio', // The plugin slug (typically the folder name)
                'source'   				=> 'https://github.com/starterLab/purgatorio/archive/master.zip', // The plugin source
                'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
                'version' 				=> '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
            ),*/
            array(
                'name'     				=> 'Advanced Custom Fields PRO',
                'slug'     				=> 'advanced-custom-fields-pro',
                'source'   				=> 'http://orca-affairs-it.de/wp-plugins/advanced-custom-fields-pro.zip',
                'required' 				=> true
            ),
            array(
                'name'     				=> 'Formidable Forms',
                'slug'     				=> 'formidableforms',
                'source'   				=> 'http://orca-affairs-it.de/wp-plugins/formidable-pro.zip',
                'required' 				=> true
            ),

            // WordPress Repository

            array(
                'name'     				=> 'Classic Editor',
                'slug'     				=> 'classic-editor',
                'source'   				=> 'https://downloads.wordpress.org/plugin/classic-editor.1.4.zip',
                'required' 				=> false
            ),
            array(
                'name'     				=> 'Custom Post Type UI',
                'slug'     				=> 'custom-post-type-ui',
                'source'   				=> 'https://downloads.wordpress.org/plugin/custom-post-type-ui.zip',
                'required' 				=> true
            ),
            array(
                'name'     				=> 'What The File',
                'slug'     				=> 'what-the-file',
                'source'   				=> 'https://downloads.wordpress.org/plugin/what-the-file.zip',
                'required' 				=> false
            ),
            array(
                'name'     				=> 'Wordfence Security',
                'slug'     				=> 'wordfence',
                'source'   				=> 'https://downloads.wordpress.org/plugin/wordfence.zip',
                'required' 				=> true
            )

        );

        tgmpa( $plugins );
    }
}

?>
