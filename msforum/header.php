<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory')?>/css/responsive.css" rel="stylesheet">
	<?php wp_head();?>
</head>
<body>
	<div id="header" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 header-left">
					<?php theme_logo();?>
				</div>
				<div class="col-sm-8 header-right">
					<nav id="header-nav" class="navbar navbar-expand-sm navbar-light">
					<?php theme_menu();;?>
					</nav>
				</div>
			</div>
		</div>
	</div>