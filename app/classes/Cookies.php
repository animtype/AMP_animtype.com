<?php

class Cookies {

    static

    function adultVerification( $f3 ) {
        if ( $f3->exists( 'COOKIE.consent' ) == 1 ) {
            // cookie exists in browser
            $f3->set( 'consent', '1' );
            $f3->set( 'cacheShort', 60 );
            $f3->set( 'cacheLong', 600 );

        } else if ( $f3->exists( 'GET.consent' ) ) {
            // av parameter is in url query
            // set a cookie
            $f3->set( 'COOKIE.consent', 'yes', $f3->get('cookies') );
            $f3->set( 'consent', '1' );
            $f3->set( 'cacheShort', 0 );
            $f3->set( 'cacheLong', 0 );

        } else {
            // no cookie anywhere to find
            // and no parameter in url query
            $f3->set( 'consent', '0' );
            $f3->set( 'cacheShort', 0 );
            $f3->set( 'cacheLong', 0 );

        }
    }

}


?>