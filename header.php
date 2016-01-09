<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#15A892">
	<title><?php bloginfo('name'); ?></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/statics/css/bootstrap.min.css">
	<!-- Font-Awesome -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/statics/css/font-awesome.min.css">
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
					<!-- <ul class="nav navbar-nav">
						<li><a href=""><i class="fa fa-home"></i> 首页</a></li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book"></i> 文章分类</a>
							<ul class="dropdown-menu">
								<li><a href="">11111</a></li>
								<li><a href="">11111</a></li>
								<li><a href="">11111</a></li>
								<li><a href="">11111</a></li>
							</ul>
						</li>
						<li><a href=""><i class="fa fa-pencil-square-o"></i> 投稿</a></li>
						<li><a href=""><i class="fa fa-info-circle"></i> 关于</a></li>
					</ul> -->
			</div>
		</div>
	</div>
</nav>
<!-- navbar end -->