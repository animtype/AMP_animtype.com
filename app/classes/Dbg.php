<?php


class Dbg {


    static public
    function ln( $string = '' ) {
        if ( Base::instance()->get( "debug" ) == 0 ) {
            return false;
        }

        echo '<br>';
        echo '<small class="color-wh">' . $string . '</small>';

    }

    static public
    function hr( $string = '' ) {
        if ( Base::instance()->get( "debug" ) == 0 ) {
            return false;
        }

        echo '<hr>';
        echo '<small class="color-wh">' . $string . '</small>';

    }

   static public
    function a( $string = '' ) {
        if ( Base::instance()->get( "debug" ) == 0 ) {
            return false;
        }
        echo '<br>';
        echo '<a href="'.$string.'" target="_blank">';
        echo '<small class="color-wh">' . $string . '</small>';
        echo '</a>';

    }



}
?>