<!DOCTYPE html>
<html lang="fr">
<head>
<title><?php wp_title(''); ?></title>
<meta content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<link rel="shortcut icon" type="image/x-icon" href="img/amandel-favicon.ico">
<link type="image/png" rel="icon" href="<?php bloginfo('template_url'); ?>/img/amandel-favicon.png" />
<link type="image/png" rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/amandel-favicon.png" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
</head>
<body>
	<!--[if lt IE 7]>
	<![endif]-->
	<!-- open/close -->
	<header>
		<section class="hero" id="accueil">
			<div class="container">
				<div class="row nav-wrapper">
					<div class="col-md-6 col-sm-6 col-xs-6 text-left">
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo-amandel-.png" alt="amandel Logo centrale d'achats"></a>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
						<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
					</div>            
				</div>
					