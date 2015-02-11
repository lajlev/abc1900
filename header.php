<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<?php if ( is_front_page() ) { // If forside ?>
		<meta name="description" content="ABC er Danmarks største beachvolleyklub. Med over 500 medlemmer og 20 baner, så har vi mulighed for at give dig beachvolley i Århus året rundt.">
	<?php } $meta_description = get_post_meta($post->ID, "meta_description", true); ?>




	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/abc-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/abc-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/abc-icon.png" />

	<meta property="fb:app_id" content="112787928922252"/>
<?php wp_head(); ?>

	<style>
		html {
			background: url(/abctest/wp-content/themes/abc1900-foundation/img/bg.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}

		body {
			background: none;
		}

		header,
		.container,
		footer {
			background: rgba(255, 254, 253, .9)
		}

		section.container.row {
			padding-top: 2em;
		}

		.contain-to-grid .top-bar {
			margin-bottom: 0;
		}

		footer {
			padding-top: 3em;
		}

	</style>

</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/da_DK/all.js#xfbml=1&appId=112787928922252";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<header class="row show-for-960-up" role="banner">
	<div class="small-12 columns">
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-no-text.png" alt=""></a>
		<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h4 class="subheader"><?php bloginfo('description'); ?></h4>
	</div>
</header>

<div class="contain-to-grid">
	<!-- Starting the Top-Bar -->
	<nav class="top-bar">
	    <ul class="title-area hide-for-960-up">
	        <li class="name">
	        	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span class="show-for-520-up"><?php bloginfo( 'name' ); ?></span><span class="hide-for-520-up">ABC</span></a></h1>
	        </li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	    </ul>
	    <section class="top-bar-section">
	    <?php
	        wp_nav_menu( array(
	            'theme_location' => 'primary',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="left">%3$s</ul>',
	            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li'
	            ) ),
	        ) );
	    ?>
	    <ul class="right">

	    	<li class="has-form"><?php get_search_form(); ?></li>
	    </ul>
	    </section>
	</nav>
	<!-- End of Top-Bar -->
</div>



<!-- Start the main container -->
<section class="container row" role="document">