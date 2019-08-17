<?php

class MinifyOutput {

    static private
    function colorTheme( $css ) {
        // color themes
        $css = preg_replace( '/blueviolet/', 'rgba(70,0,153,1)', $css ); // blue violet 
        $css = preg_replace( '/violet/', 'rgba(127,12,141,1)', $css ); // violet
        $css = preg_replace( '/lightgray/', 'rgba(255,255,255,0.8)', $css ); // light - white
        $css = preg_replace( '/darkgray/', 'rgba(255,255,255,0.3)', $css ); // transparent - white 
        $css = preg_replace( '/whites/', 'rgba(250,250,250,1)', $css ); // white
        $css = preg_replace( '/black/', 'rgba(0,0,0,0.8)', $css ); // black
        $css = preg_replace( '/darkblue/', 'rgba(23,15,32,1)', $css ); // dark blue
        $css = preg_replace( '/dimgray/', 'rgba(0,0,0,0.4)', $css ); // transparent black
        $css = preg_replace( '/gray/', 'rgba(0,0,0,0.5)', $css ); // 50% black
        $css = preg_replace( '/approot/', Base::instance()->get("domain").'/app', $css ); // base url
        $css = preg_replace( '/vivid/', '#f1864e', $css ); // vivid color       
        return $css;
    }

    static public
    function minifyCSS( $css ) {
        // Normalize whitespace
        $css = preg_replace( '/\s+/', ' ', $css );
        // Remove spaces before and after comment
        $css = preg_replace( '/(\s+)(\/\*(.*?)\*\/)(\s+)/', '$2', $css );
        // Remove comment blocks, everything between /* and */, unless
        // preserved with /*! ... */ or /** ... */
        $css = preg_replace( '~/\*(?![\!|\*])(.*?)\*/~', '', $css );
        // Remove ; before }
        $css = preg_replace( '/;(?=\s*})/', '', $css );
        // Remove space after , : ; { } */ >
        $css = preg_replace( '/(,|:|;|\{|}|\*\/|>) /', '$1', $css );
        // Remove space before , ; { } ( ) >
        $css = preg_replace( '/ (,|;|\{|}|\(|\)|>)/', '$1', $css );
        // Strips leading 0 on decimal values (converts 0.5px into .5px)
        $css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
        // Strips units if value is 0 (converts 0px to 0)
        $css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );
        // Converts all zeros value into short-hand
        $css = preg_replace( '/0 0 0 0/', '0', $css );
        // Shortern 6-character hex color codes to 3-character where possible
        $css = preg_replace( '/#([a-f0-9])\\1([a-f0-9])\\2([a-f0-9])\\3/i', '#\1\2\3', $css );
        // get a color theme and return
        return trim( self::colorTheme( trim( $css ) ) );
    }



    static
    function minifyHTML( $Html ) {
        $Search = array(
            '/(\n|^)(\x20+|\t)/',
            '/(\n|^)\/\/(.*?)(\n|$)/',
            '/\n/',
            '/\<\!--.*?-->/',
            '/(\x20+|\t)/', # Delete multispace (Without \n)
            '/\>\s+\</', # strip whitespaces between tags
            '/(\"|\')\s+\>/', # strip whitespaces between quotation ("') and end tags
            '/=\s+(\"|\')/' ); # strip whitespaces between = "'

        $Replace = array(
            "\n",
            "\n",
            " ",
            "",
            " ",
            "><",
            "$1>",
            "=$1" );

        return preg_replace( $Search, $Replace, $Html );
    }
}
?>