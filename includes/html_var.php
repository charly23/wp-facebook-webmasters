<?php if( ! class_exists( 'html_var' ) or wp_die ( 'error found.' ) ) 
{
    
    class html_var 
    {

        public static $null = null;

        /**
         * table : html
         * @param no '<thead>'
        **/

        public static function _br() {
            return '<br/>';
        }

        public static function _thead () {
            return '<thead>';
        }

        public static function _endthead () {
            return '</thead>';
        }

        /**
         * @param no '<tfoot>'
        **/

        public static function _tfoot () {
            return '<tfoot>';
        }

        public static function _endtfoot () {
            return '</tfoot>';
        }

        /**
         * tr : html
         * @param elem array() '<tr {elem}></tr>'
        **/

        public static function _tr ( $elems=array() ) 
        {
            $value = self::$null;

            if( is_array( $elems) ) foreach( $elems as $keys => $vals ) :
                $value .= "{$keys}='{$vals}' ";
            endforeach;

            return "<td {$value}>";
        }

        public static function _endtr () {
            return '</tr>';
        }

        /**
         * td : html
         * @param elem array() '<td {elem}></td>'
        **/

        public static function _td ( $elems=array() ) 
        {
            $value = self::$null;

            if( is_array( $elems) ) foreach( $elems as $keys => $vals ) :
                $value .= "{$keys}='{$vals}' ";
            endforeach;

            return "<td {$value}>";
        }

        public static function _endtd () {
            return '</td>';
        }

        /**
         * th : html
         * @param elem array() '<th {elem}></th>'
        **/

        public static function _th ( $elems=array() ) 
        {
            $value = self::$null;

            if( is_array( $elems) ) foreach( $elems as $keys => $vals ) :
                $value .= "{$keys}='{$vals}' ";
            endforeach;

            return "<td {$value}>";
        }

        public static function _endth () {
            return '</td>';
        }

        /**
         * ahref : html
         * @param elem array() '<a {elem}></a>'
        **/

        public static function _a ( $elems=null ) 
        {
            $value = self::$null;

            if( is_array( $elems) ) foreach( $elems as $keys => $vals ) :
                $value .= "{$keys}='{$vals}' ";
            endforeach;

            return "<a {$value}>";
        }

        public static function _aend () {
            return '</a>';   
        }

        /**
         * div : html
         * @param elem array() '<div {elem}></div>'
        **/

        public static function _div ( $elems=null ) 
        {
            $value = self::$null;

            if( is_array( $elems) ) foreach( $elems as $keys => $vals ) :
                $value .= "{$keys}='{$vals}' ";
            endforeach;

            return "<div {$value}>";
        }

        public static function _divend () {
            return '</div>';   
        }

        /**
         * span : html
         * @param elem array() '<span {elem}></span>'
        **/

        public static function _span ( $elems=null ) 
        {
            $value = self::$null;

            if( is_array( $elems) ) foreach( $elems as $keys => $vals ) :
                $value .= "{$keys}='{$vals}' ";
            endforeach;

            return "<span {$value}>";
        }

        public static function _spanend () {
            return '</span>';   
        }

        /**
         * paragraph : html
         * @param elem array() '<p {elem}></p>'
        **/

        public static function _p ( $elems=null ) 
        {
            $value = self::$null;

            if( is_array( $elems) ) foreach( $elems as $keys => $vals ) :
                $value .= "{$keys}='{$vals}' ";
            endforeach;

            return "<p {$value}>";
        }

        public static function _pend () {
            return '</p>';   
        }

        // END

    }

}
