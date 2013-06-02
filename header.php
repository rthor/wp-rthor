<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="/favicon.ico">

    <script type="text/javascript" src="//use.typekit.net/dqy6mfe.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>

    <!-- Wordpress Templates require a style.css in theme root directory -->
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>

    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/vendor/modernizr-2.6.1.min.js") ?>

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

  <nav id="nav" class="nav">
    <div class="container">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

      <div class="actions">
          <div class="social">
              <a href="http://github.com/rthor" title="Follow me on GitHub" class="github"><span aria-hidden="true" class="icon-github"></span></a>
              <a href="http://twitter.com/rthor" title="Follow me on Twitter" class="twitter"><span aria-hidden="true" class="icon-twitter"></span></a>
          </div>

          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
          <input type="text" value="" placeholder="Search" name="s" id="s" />
          <input type="submit" id="searchsubmit" value="Go!" />
        </form>
      </div>
    </div>
  </nav>

  <div class="container" id="container">

    <header role="banner">
        <img src="<?php bloginfo('template_directory'); ?>/img/me.jpg" alt="Ragnar Þór Valgeirsson rthor">
        <h1><span class="name">Ragnar Þór Valgeirsson</span> <small>rthor</small></h1>
        <p class="description"><?php bloginfo('description'); ?></p>
    </header>
