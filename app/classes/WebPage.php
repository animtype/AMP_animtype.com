<?php

class WebPage {

    // title - for tab title
    // subtitle - small content block
    // headline - for headline on page
    // render - main content
    // bodyclass - body css style



    function homePage( $f3 ) {
        echo View::instance()->render( 'app/main-layout.php' );
    }
    function ampPage( $f3 ) {
        echo View::instance()->render( 'app/amp-layout.php' );
    }
    function ampStory( $f3 ) {
        echo View::instance()->render( 'app/amp-story.php' );
    }
    function errorPage( $f3 ) {
        echo View::instance()->render( 'app/404.php' );
    }
}
?>