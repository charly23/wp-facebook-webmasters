<?php if( ! class_exists( 'wp_facebook_webmasters_loader' ) or wp_die ( 'error found.' ) ) :

    class wp_facebook_webmasters_loader extends wp_facebook_webmasters
    {

        public static $menu_name = 'Facebook Webmasters';

        public static $plugin_name = 'wp_facebook_webmasters';
        public static $plugin_page = 'wp-facebook-webmasters';

        public static $option_name = 'wp_facebook_webmasters_meta_data';

        public function __construct () 
        {
            add_action( 'init', array( $this, 'enqueue_style_handler' ) );
            add_action( 'admin_init', array( $this, __( static::$plugin_name, 'plugin-name' ) . '_admin_action_handler' ) );

            add_action( 'admin_menu', array( $this, static::$plugin_name.'_admin_menu_handler' ) );
            add_action( 'wp_head', array( $this, __( static::$plugin_name, 'plugin-name' ) . '_admin_head_handler' ) );
        }

        public function enqueue_style_handler () {
                 
            global $wp_styles;

            if( is_admin() ) {
                wp_enqueue_style ( $plugin_page . '-style-admin', WP_Facebook_Webmasters_URL . '/assets/css/admin.css' );
            } else {
                wp_enqueue_style ( $plugin_page . '-style-front', WP_Facebook_Webmasters_URL . '/assets/css/front.css' );
            }
        }

        // WP Facebook Webmasters : admin-menu handler

        public function wp_facebook_webmasters_admin_menu_handler () 
        {
            add_menu_page (
                __( __( static::$menu_name, 'plugin-name' ), static::$plugin_name ),
                __( __( static::$menu_name, 'plugin-name' ), static::$plugin_name ),
                'manage_options',
                static::$plugin_page,
                array( $this, static::$plugin_name . '_admin_page_handler' )
            );
        }

        // WP Facebook Webmasters : admin head handler

        public function wp_facebook_webmasters_admin_action_handler () 
        {
            $values = serialize( $_POST );

            if( isset( $_POST['webmasters-submit'] ) ) 
            {

                if ( get_option( static::$option_name ) !== false ) {
                    update_option( static::$option_name, $values );
                } else {
                    add_option( static::$option_name, $values );
                }

                if ( wp_redirect( 'admin.php?page='.static::$plugin_page ) ) {
                    exit;
                }
                
            }

            
        }

        // WP Facebook Webmasters : admin-page handler

        public function wp_facebook_webmasters_admin_page_handler () 
        {
            $html = null;

            $html .= wp_facebook_webmasters_admin::form();
            $html .= wp_facebook_webmasters_admin::basic();
            $html .= wp_facebook_webmasters_admin::video();
            $html .= wp_facebook_webmasters_admin::image();
            $html .= wp_facebook_webmasters_admin::submit();
            $html .= wp_facebook_webmasters_admin::form_end();

            _e( $html, 'html' );
        }

        // WP Facebook Webmasters : admin head handler

        public function wp_facebook_webmasters_admin_head_handler () 
        {
            _e( wp_facebook_webmasters::head(), 'meta' );
        }

        // END
    }

    new wp_facebook_webmasters_loader(  true );

endif;
?>