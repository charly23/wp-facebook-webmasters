<?php if( ! class_exists( 'wp_facebook_webmasters_admin' ) or wp_die ( 'error found.' ) ) :

    class wp_facebook_webmasters_admin extends wp_facebook_webmasters
    {

        // WP Facebook Webmaster : admin page scripts

        public static $page_id = 'wp-facebook-webmasters';
        public static $fb_webm = 'https://developers.facebook.com/docs/sharing/webmasters#markup';

        public static $option_name = 'wp_facebook_webmasters_meta_data';

        public function __construct () 
        {
            new html_var(true);
        }

        // BASIC : Webmasters - Sharing

        public static function basic () 
        {
            $html = null;

            $options = unserialize( get_option( static::$option_name ) );

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-wrap basic-pad' ) );
            $html .= static::basic_head();
            $html .= static::basic_body( $options );
            $html .= html_var::_divend();

            return $html;
        }

        public static function basic_head () 
        {
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-head' ) );
            $html .= __( 'Facebook Webmasters - Basic', 'string' ); 
            $html .= html_var::_divend();

            return $html;
        }

        public static function basic_body ( $options=null ) 
        {
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-body' ) );

            $web_og = web_og::basic();
            foreach ( $web_og as $keys => $vals ) :
                $og = key( $vals );
                $name = str_replace( ':','-', $og.$vals[$og] );
                $opts = $options[$name];
                $html .= static::basic_item( $vals, $opts );
            endforeach;

            $html .= html_var::_divend();

            return $html;
        }

        public static function basic_item ( $vals=null, $opts=null ) 
        {   
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-item' ) );

                $og = key( $vals );

                $html .= html_var::_span( array( 'class'=>'item-label') ); 
                $html .= __( '<code>'.$og.$vals[$og].'</code>', 'string' ); 
                $html .= html_var::_spanend(); 

                $name = str_replace( ':','-', $og.$vals[$og] );

                $html .= html_var::_span( array( 'class'=>'item-input') ); 
                $html .= __( "<input type='text' name='{$name}' value='{$opts}' />", 'input' ); 
                $html .= html_var::_spanend(); 

            $html .= html_var::_divend();

            return $html;
        }

        public static function basic_foot () 
        {
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-foot' ) );
            $html .= html_var::_a( array( 'class' => 'wp-facebook-webmasters-link', 'href' => __( static::$fb_webm, 'link' ), 'target' => '_blank' ) ) . html_var::_aend();
            $html .= html_var::_divend();

            return $html;
        }

        // Videos : Webmasters - Sharing

        public static function video () 
        {
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-wrap video-pad' ) );
            $html .= static::video_head();
            $html .= static::video_body();
            $html .= html_var::_divend();

            return $html;
        }

        public static function video_head () 
        {
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-head' ) );
            $html .= __( 'Facebook Webmasters - Video', 'string' ); 
            $html .= html_var::_divend();

            return $html;
        }

        public static function video_body () 
        {
            $html = null;

            $options = unserialize( get_option( static::$option_name ) );

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-body' ) );

            $web_og = web_og::video();
            foreach ( $web_og as $keys => $vals ) :
                $og = key( $vals );
                $name = str_replace( ':','-', $og.$vals[$og] );
                $opts = $options[$name];
                $html .= static::video_item( $vals, $opts );
            endforeach;

            $html .= html_var::_divend();

            return $html;
        }

        public static function video_item ( $vals=null, $opts=null ) 
        {   
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-item' ) );

                $og = key( $vals );

                $html .= html_var::_span( array( 'class'=>'item-label') ); 
                $html .= __( '<code>'.$og.$vals[$og].'</code>', 'string' ); 
                $html .= html_var::_spanend(); 

                $name = str_replace( ':','-', $og.$vals[$og] );

                $html .= html_var::_span( array( 'class'=>'item-input') ); 
                $html .= __( "<input type='text' name='{$name}' value='{$opts}' />", 'input' ); 
                $html .= html_var::_spanend(); 

            $html .= html_var::_divend();

            return $html;
        }

        public static function video_foot () 
        {
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-foot' ) );
            $html .= html_var::_a( array( 'class' => 'wp-facebook-webmasters-link', 'href' => __( static::$fb_webm, 'link' ), 'target' => '_blank' ) ) . html_var::_aend();
            $html .= html_var::_divend();

            return $html;
        }

        // Images : Webmasters - Sharing

        public static function image () 
        {
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-wrap image-pad' ) );
            $html .= static::image_head();
            $html .= static::image_body();
            $html .= static::image_foot();
            $html .= html_var::_divend();

            return $html;
        }

        public static function image_head () 
        {
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-head' ) );
            $html .= __( 'Facebook Webmasters - Image', 'string' ); 
            $html .= html_var::_divend();

            return $html;
        }

        public static function image_body () 
        {
            $html = null;

            $options = unserialize( get_option( static::$option_name ) );

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-body' ) );

            $web_og = web_og::image();
            foreach ( $web_og as $keys => $vals ) :
                $og = key( $vals );
                $name = str_replace( ':','-', $og.$vals[$og] );
                $opts = $options[$name];
                $html .= static::image_item( $vals, $opts );
            endforeach;

            $html .= html_var::_divend();

            return $html;
        }

        public static function image_item ( $vals=null, $opts=null ) 
        {   
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-item' ) );

                $og = key( $vals );

                $html .= html_var::_span( array( 'class'=>'item-label') ); 
                $html .= __( '<code>'.$og.$vals[$og].'</code>', 'string' ); 
                $html .= html_var::_spanend(); 

                $name = str_replace( ':','-', $og.$vals[$og] );

                $html .= html_var::_span( array( 'class'=>'item-input') ); 
                $html .= __( "<input type='text' name='{$name}' value='{$opts}' />", 'input' ); 
                $html .= html_var::_spanend(); 

            $html .= html_var::_divend();

            return $html;
        }

        public static function image_foot () 
        {
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-foot' ) );
            $html .= html_var::_a( array( 'class' => 'wp-facebook-webmasters-link', 'href' => __( static::$fb_webm, 'link' ), 'target' => '_blank' ) ) . html_var::_aend();
            $html .= html_var::_divend();

            return $html;
        }

        // Form : Webmasters - Sharing

        public static function form () 
        {
            $html = null;
            $html .= __( "<form method='post'>", 'form' ); 
            return $html;
        }

        public static function form_end () 
        {
            $html = null;
            $html .= __( "</form>", 'form' ); 
            return $html;
        }

        // Submit : Webmasters - Sharing

        public static function submit () 
        {
            $html = null;

            $html .= html_var::_div( array( 'class' => __( static::$page_id, 'page-id' ) . '-action' ) );
            $html .= __( "<input type='submit' name='webmasters-submit' />", 'submit' ); 
            $html .= html_var::_divend();

            return $html;
        }
    }

endif;
?>