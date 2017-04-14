<?php if( ! class_exists( 'web_og' ) or wp_die ( 'error found.' ) ) :

    // https://developers.facebook.com/docs/sharing/webmasters#markup

    class web_og 
    {

        public static $slug = 'og';

        public static function basic () 
        {
            $options = array();

            $options[] = array( static::$slug => ':url' );
            $options[] = array( static::$slug => ':type' );
            $options[] = array( static::$slug => ':title' );
            $options[] = array( static::$slug => ':description' );
            $options[] = array( static::$slug => ':image' );

            return $options;
        }

        public static function video () 
        {
            $options = array();

            $options[] = array( static::$slug => ':video' );
            $options[] = array( static::$slug => ':video:url' );
            $options[] = array( static::$slug => ':video:secure_url' );
            $options[] = array( static::$slug => ':video:type' );
            $options[] = array( static::$slug => ':video:width' );
            $options[] = array( static::$slug => ':video:height' );

            return $options;
        }

        public static function image () 
        {
            $options = array();

            $options[] = array( static::$slug => ':image:url' );
            $options[] = array( static::$slug => ':image:secure_url' );
            $options[] = array( static::$slug => ':image:type' );
            $options[] = array( static::$slug => ':image:width' );
            $options[] = array( static::$slug => ':image:height' );

            return $options;
        }

        // END
    }

endif;
?>