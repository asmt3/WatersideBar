<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Waterside Bar, Hunstanton - <?php echo $title_for_layout ?></title>
  <meta name="description" content="Live Music, Great Music, Great Food, Great View">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=1024">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/style.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.0.min.js"></script>
</head>
<body class="<?php echo $page_name ?>">
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

		<h1 class="ir">Waterside Bar</h1>

  </header>
  <div id="container-outer">
	
		<nav>
			<ul>
				<li class="home"><a href="/" class="ir">Home</a></li>
				<li class="music"><a href="/music" class="ir">Live Music</a></li>
				<li class="menu"><a href="/menu" class="ir">Food &amp; Drink Menu</a></li>
				<li class="contact"><a href="/contact" class="ir">Contact</a></li>
			</ul>
		</nav>
		
		<div id="container-inner">
			
			<div role="main" id="main">
			
				<ul id="key-facts">
					<li id="key-fact-tel">01485 535810</li>
					<li id="key-fact-hours">Food served 11am - 9pm every day</li>
				</ul>

				<?php echo $content_for_layout; ?>





			</div> <!--#main-->
			
			<div id="sidebar">
				
				
				
				<?php 	
					// add asides
					foreach ((array)$asides as $aside): 
						echo $this->element('aside-' . $aside);
					endforeach;
				?>


		
			</div> <!--#sidebar-->
			
		</div> <!--#container-inner -->
		<footer>
			&copy; 2012 Waterside Bar | Development by <a href="http://www.projectmccoll.co.uk">Project McColl</a> | Design by <a href="http://designbiscuit.co.uk/">Design Biscuit</a>
	  </footer>
  </div> <!--#container-outer -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>

	<?php echo $scripts_for_layout; ?>

  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-3468514-5'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>


</body>
</html>