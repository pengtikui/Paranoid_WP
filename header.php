<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#15A892">
	<title><?php if (is_home()||is_search()){ bloginfo('name'); echo " | "; bloginfo('description'); } else{wp_title(''); echo ' | '; bloginfo('name');} ?></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- Font-Awesome -->
	<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Custom -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- header start -->
<div class="main-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</div>
		</div>
	</div>
</div>
<!-- header end -->
<!-- navbar start -->
<nav class="main-navbar">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
				</div>
				<?php wp_nav_menu( array(
					'theme_location'	=> 'header_menu',
					'container_class'	=> 'collapse navbar-collapse',
					'container_id'		=> 'main-navbar',
					'menu_class'		=> 'nav navbar-nav'
					)
				); ?>
			</div>
		</div>
	</div>
</nav>
<!-- navbar end -->