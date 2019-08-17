<?php

// Kickstart the framework
$f3 = require( 'lib/base.php' );

/* main classes */
$f3->set( 'AUTOLOAD', 'app/classes/' );

/* CACHE */
$f3->set( 'CACHE', false );


// *********************
// R O U T E S *********
// *********************
// to HTTPS !!!
if ( strpos( $_SERVER[ 'SERVER_NAME' ], 'localhost' ) !== false ) {
	$f3->set( 'url', 'http://localhost/animtype/' );
} else {
    if ($f3->get('SCHEME')!='https')  {
    	$f3->reroute('https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
	}
	$f3->set( 'url', 'https://animtype.com/' );
}

/* params */
$quotes='<svg viewBox="0 0 40 40"><path d="M20.44,2.13c-23.22,0-23.22,36,0,36S43.66,2.13,20.44,2.13ZM11,27.41l-.72-1.05c3.85-3.13,3.88-5.91,0-9.08l4.46-4.43C20.88,18.07,18.73,23.73,11,27.41Zm11.35,0-.72-1.05c3.85-3.13,3.88-5.91,0-9.08l4.46-4.43C32.23,18.07,30.08,23.73,22.39,27.41Z" fill="#fff"/></svg>';
$quotes_end='<svg class="end" viewBox="0 0 40 40"><path d="M20.44,2.13c-23.22,0-23.22,36,0,36S43.66,2.13,20.44,2.13ZM11,27.41l-.72-1.05c3.85-3.13,3.88-5.91,0-9.08l4.46-4.43C20.88,18.07,18.73,23.73,11,27.41Zm11.35,0-.72-1.05c3.85-3.13,3.88-5.91,0-9.08l4.46-4.43C32.23,18.07,30.08,23.73,22.39,27.41Z" fill="#fff"/></svg>';
$f3->set('quotes', $quotes);
$f3->set('quotes_end', $quotes_end);

// cashTime in seconds, 600 is 10 minutes
/* home page */

$f3->route('GET /amp*','WebPage->ampPage',0);
$f3->route('GET /story*','WebPage->ampStory',0);

$f3->route('GET /*','WebPage->homePage',0);

$f3->set('ONERROR','WebPage->errorPage');


/* run the foker */
$f3->run();

?>