<!doctype html>
<html lang="en">
<head>
	<?php $ver = "?ver=6"; ?>
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">	
	<link rel="amphtml" href="<?php echo Base::instance()->get('url'); ?>story">
	<?php echo (View::instance()->render("app/description.php")); ?>
	<link rel="stylesheet" href="<?php echo Base::instance()->get('url'); ?>app/css/page.css<?php echo $ver; ?>">
	<script src="<?php echo Base::instance()->get('url'); ?>app/js/jquery.js"></script>
	<script src="<?php echo Base::instance()->get('url'); ?>app/js/parallax.js"></script>
	<script type="text/javascript">	
	var app=[];$(document).ready(function(){app.scrollToAnchor=function(o){var t=$("a[name='"+o+"']");$("html,body").animate({scrollTop:t.offset().top},"slow",function(){window.location.hash=o})},app.applyRipple=function(){$(document).off("mousedown","[data-ripple]"),$(document).on("mousedown","[data-ripple]",function(o){var t=$(this);if(!t.is(".btn-disabled")){t.closest("[data-ripple]")&&o.stopPropagation();var p=t.css("position"),a=t.offset(),i=o.pageX-a.left,e=o.pageY-a.top,n=Math.min(this.offsetHeight,this.offsetWidth,100),s=$("<div/>",{class:"ripple",appendTo:t});p&&"static"!==p||t.css({position:"relative"}),$("<div/>",{class:"rippleWave",css:{background:t.data("ripple"),width:n,height:n,left:i-n/2,top:e-n/2},appendTo:s,one:{animationend:function(){s.remove()}}})}})},app.applyRipple()});
	</script>
</head>
<body>
<main>
	<div data-ripple class="parallax-window" data-parallax="scroll" data-image-src="<?php echo Base::instance()->get('url'); ?>app/img/bg.jpg<?php echo $ver; ?>">
		<?php echo (View::instance()->render("app/quote1.php")); ?>
	</div>
	<div data-ripple class="parallax-window" data-parallax="scroll" data-image-src="<?php echo Base::instance()->get('url'); ?>app/img/bg1.jpg<?php echo $ver; ?>">
		<?php echo (View::instance()->render("app/quote2.php")); ?>
	</div>
	<div data-ripple class="parallax-window" data-parallax="scroll" data-image-src="<?php echo Base::instance()->get('url'); ?>app/img/bg2.jpg<?php echo $ver; ?>">
		<?php echo (View::instance()->render("app/quote3.php")); ?></div>
	<div data-ripple class="parallax-window" data-parallax="scroll" data-image-src="<?php echo Base::instance()->get('url'); ?>app/img/bg3.jpg<?php echo $ver; ?>">
		<?php echo (View::instance()->render("app/quote4.php")); ?>
	</div>
</main>
<footer data-ripple >
	<div class="text">	
		<p class="small">
			<img src="<?php echo Base::instance()->get('url'); ?>mstile-270x270.png" width="135" height="135" alt="animtype">
			<br>
			©2004-<?php echo date("Y"); ?> AnimType; <em>We do not use cookies in this site.</em><br><strong>The meaning of animtype:</strong> <em>the animation type for the specified object in the stage.</em></p>
		<p class="small"></p>
		<p>&nbsp;</p>
			<nav>
				<button class="small" onclick="app.scrollToAnchor('animtype');">Web design</button>
				<button class="small" onclick="app.scrollToAnchor('user-friendly');">User-friendly</button>
				<button class="small" onclick="app.scrollToAnchor('highlighted');">Highlighted projects</button>
				<button class="small" onclick="app.scrollToAnchor('get-in-touch');">Get in touch</button>
			</nav>
		<p>&nbsp;</p>
	</div>
</footer>
</body>
</html>