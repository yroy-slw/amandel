<!DOCTYPE html>
<html lang="fr">
<head>
<meta content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
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
							<a href="#"><img src="img/logo-amandel-.png" alt="amandel Logo centrale d'achats"></a>
						</div>

					<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
							<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
							<!--<?php wp_nav_menu( array( 'theme_location' => 'pages' ) ); ?>-->
						</div>
                        
					</div>
					<div class="row hero-content">
						<div class="col-md-11">
							<h1 class="animated fadeInDown">Une nouvelle Centrale d'Achats pour les établissements hospitaliers, médico-sociaux, crèches et PME.<br></h1>
							<a href="#amandel" class="learn-c-btn animated fadeInUp">en savoir + </a>
							<a href="http://amandel.ch/amandel-2017/amandel-contact.html" class="learn-c-btn animated fadeInUp">contact</a>
						</div>
					</div>
				</div>
			</section>
		</header>