<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- media-queries.js (fallback) -->
<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

<!-- html5.js -->
<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!-- wordpress head functions -->
<?php wp_head(); ?>
<!-- media-queries.js (fallback) -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/dumbo.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/font-awesome-ie7.css">
<![endif]-->
<!-- end of wordpress head -->
<!-- typeahead plugin - if top nav search bar enabled -->
<?php require_once('library/typeahead.php'); ?>
<!-- Facebook Conversion Code for Winterlude Pixel -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6018122649027', {'value':'0.00','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6018122649027&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
</head>

<body <?php body_class(); ?>>
<?php if (is_front_page()){ ?>
<div id="nav-wrap">
<? } else { ?>
<div id="nav-page">
<? } ?>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container nav-container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <div class="menu-label">Menu</div>
          <div class="pull-right menu-bars"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
          </button>
        <nav role="navigation" id="main-menu">
          
          <div class="navbar-collapse collapse">
            <?php winter_main_nav(); // Adjust using Menus in Wordpress Admin ?>
          </div>
        </nav>
      </div>
      <!-- end .nav-container --> 
    </div>
    <!-- end .navbar-inner --> 
  </div>
  <!-- end .navbar -->
</div>
<?php
if (is_front_page()){
  $bg = array('bg1.jpg', 'bg2.jpg', 'bg3.jpg', 'bg4.jpg'); // array of filenames
  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<div id="hero" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/library/bg/<?php echo $selectedBg; ?>)">
<? } else { ?>
<div id="snowed-in">
  <? } ?>
  <div id="snowflakesContainer" style="overflow:hidden;"></div>
  
  <div id="wrapper">
    <div class="container" id="head-wrap">
      <header role="banner" id="inner-header">
        <div class="row">
          <div class="col-sm-4 col-xs-5">
            <div class="siteinfo"><a class="brand" href="http://syr.edu"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/images/su-logotype.png" alt="Syracuse University" /> <span class="hidden"> Syracuse University </span> </a> </div>
          </div>
          <div class="col-sm-8 hidden-xs">
            <?php winter_utility_links(); // Adjust using Menus in Wordpress Admin ?>
          </div>
        </div>
      </header>
      <div class="row">
        <div id="logo">
          <div class="col-sm-11 col-sm-offset-1"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/images/su-winterlude.png" alt="Syracuse University" />
            <h1 class="hidden">
              <?php bloginfo('title'); ?>
            </h1>
          </div>
        </div>
        <div class="col-md-3 col-xs-8"><div id="brand">
          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/images/su-winterlude.png" alt="Syracuse University" class="visible-lg visible-md"/><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/library/images/su-winterlude-inline.png" alt="Syracuse University" class="visible-sm visible-xs"/>
            <h1 class="hidden">
              <?php bloginfo('title'); ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero/SnowedIn--> 
</div>

<!-- End Flakes-->
<?php
if (is_front_page()){ ?>
<div id="drifts">
<? } else { ?>
<div id="clumps">
<? } ?>
<div class="container">
<!-- end header -->