<?php if( ! class_exists( 'wp_facebook_webmasters' ) or wp_die ( 'error found.' ) ) :

    // https://developers.facebook.com/docs/sharing/webmasters#markup

    class wp_facebook_webmasters 
    {

        public static $slug = 'facebook_webmasters';
        public static $option_name = 'wp_facebook_webmasters_meta_data';

        public static function head () 
        {
            $meta = null;
            $options = unserialize( get_option( static::$option_name ) );

            foreach( $options as $keys => $results ) :

                if( $keys != 'webmasters-submit' ) {
                    $meta .= static::meta( $keys, $results );
                }

            endforeach;

            return $meta; 
        }

        public static function meta ( $property=null, $content=null ) 
        {
            $og = str_replace( '-', ':', $property );
            if( ! is_null( $content ) and $content !== false and $content !='' ) return "<meta property='{$og}' content='{$content}' />";
        }

        // END
    }

endif;
?>