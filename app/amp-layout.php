<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<link rel="canonical" href="<?php echo Base::instance()->get('url'); ?>">
<?php $ver = "?ver=6"; ?>
<?php echo (View::instance()->render("app/description.php")); ?>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
<script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
<style amp-custom>
<?php echo MinifyOutput::minifyCSS(View::instance()->render('app/css/page.css','text/css')); ?>
body {
	font-size: 14px;
}
.bg {
	width: 100%;
	height: 120vh;
}
.bg section { height: auto; }.bg .separator { width: 100%; padding: 0 2em; text-align: center; }.bg .button { width: 100%; }.bg { background-size: cover; background-repeat: no-repeat; background-position: top center; }
.bg.bg1 { background-image: url('<?php echo Base::instance()->get('url'); ?>app/img/small-bg.jpg<?php echo $ver; ?>'); }
.bg.bg2 { background-image: url('<?php echo Base::instance()->get('url'); ?>app/img/small-bg1.jpg<?php echo $ver; ?>'); }
.bg.bg3 { background-image: url('<?php echo Base::instance()->get('url'); ?>app/img/small-bg2.jpg<?php echo $ver; ?>'); }
.bg.bg4 { background-image: url('<?php echo Base::instance()->get('url'); ?>app/img/small-bg3.jpg<?php echo $ver; ?>'); }
</style>
</head>
<body>
	<div class="bg bg1">
		<?php echo preg_replace('#<button(.*?)</button>#', '', (View::instance()->render("app/quote1.php"))); ?>
		<div class="separator color1"><a class="button" href="#user-friendly">Go with the flow!</a></div>
	</div>
	<div class="bg bg2">
		<?php echo preg_replace('#<button(.*?)</button>#', '', (View::instance()->render("app/quote2.php"))); ?>
		<div class="separator color2"><a class="button" href="#highlighted">Go with the flow!</a></div>
	</div>
	<div class="bg bg3">
		<?php echo preg_replace('#<button(.*?)</button>#', '', (View::instance()->render("app/quote3.php"))); ?>
		<div class="separator color3"><a class="button" href="#get-in-touch">Go with the flow!</a></div>
	</div>
	<div class="bg bg4">
		<?php echo preg_replace('#<button(.*?)</button>#', '', (View::instance()->render("app/quote4.php"))); ?>
	</div>
<footer>
	<div class="text">	
		<p class="small">
			<amp-img src="<?php echo Base::instance()->get('url'); ?>mstile-270x270.png" width="135" height="135" alt="animtype"></amp-img>
			<br>
			©2004-<?php echo date("Y"); ?> AnimType; <em>We do not use tracking cookies in this site.</em><br><strong>The meaning of animtype:</strong> <em>the animation type for the specified object in the stage.</em></p>
		<p class="small"></p>
		<p>&nbsp;</p>
			<nav>
				<a class="button small" href="#animtype">Web design</a>
				<a class="button small" href="#user-friendly">User-friendly</a>
				<a class="button small" href="#highlighted">Highlighted projects</a>
				<a class="button small" href="#get-in-touch">Get in touch</a>
			</nav>
		<p>&nbsp;</p>
	</div>
</footer>
</body>
</html>