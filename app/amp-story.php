<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<link rel="canonical" href="<?php echo Base::instance()->get('url'); ?>story">
<?php $ver = "?ver=6"; ?>
<?php echo (View::instance()->render("app/description.php")); ?>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    <script async custom-element="amp-story" src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>
    <style amp-custom>
      body {  
        background-color: #74546A;
        font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
        font-size: 12px; }
      amp-story-page h1 { font-weight: 100; font-size: 2em; color: #fff; }
      amp-story-page p { font-size: 1em; color: #fff; }
      amp-story-page {
        background-color: #000;
      }
      h1,h2 {
        font-weight: 100;
        font-size: 2em;
        line-height: 1em;
        color: #fff;
        padding: 0.4em 0.5em 0.6em 0.5em;
        background-color: rgba(255,255,255,0.15);
        border-radius: 0.4em;
      }
      p {
        font-weight: normal;
        font-size: 1.3em;
        line-height: 1.5em;
        color: #fff;
      }
      q {
        font-weight: 300;
        font-size: 1.1em;
      }
      amp-story-grid-layer {
        background: -moz-linear-gradient(top,  rgba(0,0,0,1) 0%, rgba(0,0,0,0) 50%);
        background: -webkit-linear-gradient(top,  rgba(0,0,0,1) 0%,rgba(0,0,0,0) 50%); 
        background: linear-gradient(to bottom,  rgba(0,0,0,1) 0%,rgba(0,0,0,0) 50%);
      }
      a { font-weight: 600; color: #fff; }
      svg { 
        display: inline-block;  
        width: 1em;
        height: 1em;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        opacity: 0.4;
      }
      svg.end { 
        -webkit-transform: rotate(0);
        transform: rotate(0);
      }
      .color1 h1,
      .color1 h2 { color: #fa7693; text-shadow: 0 0 5px rgba(0,0,0,0.4); background-color: rgba(0,0,0,0.5); }
      .color2 h1,
      .color2 h2 { color: #FFB997; text-shadow: 0 0 5px rgba(0,0,0,0.7); }
      .color3 h1,
      .color3 h2 { color: #1B98E0; text-shadow: 0 0 5px rgba(0,0,0,0.7); }
      .color4 h1,
      .color4 h2 { color: #9AB87A; text-shadow: 0 0 5px rgba(0,0,0,0.7); }
    </style>
</head>
<body>

  <!-- Cover page
  Portrait: 696px x 928px
  Landscape: 928px x 696px
  -->
  <amp-story 
      standalone
      title="Joy of Pets"
      publisher="AMP tutorials"
      publisher-logo-src="<?php echo Base::instance()->get('url'); ?>apple-touch-icon.png<?php echo $ver; ?>"
      poster-portrait-src="amp/small-bg.jpg">

      <!-- cover -->
      <amp-story-page id="cover">
        <amp-story-grid-layer template="fill">
          <amp-img src="<?php echo Base::instance()->get('url'); ?>app/img/small-bg.jpg<?php echo $ver; ?>"
              width="720" height="1280"
              layout="responsive">
          </amp-img>
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical">          
          <?php echo preg_replace('#<button(.*?)</button>#', '', (View::instance()->render("app/quote1.php"))); ?>
          <amp-img animate-in="rotate-in-left" src="<?php echo Base::instance()->get('url'); ?>mstile-270x270.png" width="135" height="135" alt="animtype"></amp-img>
        </amp-story-grid-layer>
      </amp-story-page>

      <!-- Page 1 -->
      <amp-story-page id="page1">
        <amp-story-grid-layer template="fill">
          <h1>Cats</h1>
          <amp-img src="<?php echo Base::instance()->get('url'); ?>app/img/small-bg1.jpg<?php echo $ver; ?>"
              width="720" height="1280"
              layout="responsive">
          </amp-img>
          </amp-story-grid-layer>
          <amp-story-grid-layer template="vertical">
            <?php echo preg_replace('#<button(.*?)</button>#', '', (View::instance()->render("app/quote2.php"))); ?>
        </amp-story-grid-layer>
      </amp-story-page>

      <!-- Page 2 -->
      <amp-story-page id="page2">
        <amp-story-grid-layer template="fill">
          <h1>Cats</h1>
          <amp-img src="<?php echo Base::instance()->get('url'); ?>app/img/small-bg2.jpg<?php echo $ver; ?>"
              width="720" height="1280"
              layout="responsive">
          </amp-img>
          </amp-story-grid-layer>
          <amp-story-grid-layer template="vertical">
            <?php echo preg_replace('#<button(.*?)</button>#', '', (View::instance()->render("app/quote3.php"))); ?>
        </amp-story-grid-layer>
      </amp-story-page>

      <!-- Page 3 -->
      <amp-story-page id="page3">
        <amp-story-grid-layer template="fill">
          <h1>Cats</h1>
          <amp-img src="<?php echo Base::instance()->get('url'); ?>app/img/small-bg3.jpg<?php echo $ver; ?>"
              width="720" height="1280"
              layout="responsive">
          </amp-img>
          </amp-story-grid-layer>
          <amp-story-grid-layer template="vertical">
            <?php echo preg_replace('#<button(.*?)</button>#', '', (View::instance()->render("app/quote4.php"))); ?>
        </amp-story-grid-layer>
      </amp-story-page>

      <!-- Bookend -->
      <amp-story-bookend src="<?php echo Base::instance()->get('url'); ?>app/bookend.json" layout="nodisplay"></amp-story-bookend>

  </amp-story>
</body>
</html>