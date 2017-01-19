<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>
<!--   -->
					<div class="row hero-content" <?php live_edit('post_title, slogan, titre_valeur_ajoutee, col_left_valeur_ajoutee, col_right_valeur_ajoutee, titre_domaine, col_left_domaine, col_right_domaine, titre_philo, col_left_philo, col_right_philo, texte_bas_de_page'); ?>>
						<div class="col-md-11">
							<h1 class="animated fadeInDown"><?php the_field("slogan"); ?><br></h1>
							<a href="#amandel" class="learn-c-btn animated fadeInUp">en savoir + </a>
							<a href="http://amandel.ch/amandel-2017/amandel-contact.html" class="learn-c-btn animated fadeInUp">contact</a>
						</div>
					</div>
				</div>
			</section>
		</header>
			<div class="row"><section class="features-list" id="amandel">
				<div class="container">
					<div class="col-md-12">
						<div class="col-md-4 feature-1 wp1">
							<div class="feature-content">
								<h1><?php the_field("titre_valeur_ajoutee"); ?></h1>
							</div>
						</div>
						<div class="col-md-4 feature-2 wp2 delay-05s">
							<div class="feature-content">
								<h2><?php the_field("col_left_valeur_ajoutee"); ?></h2>
							</div>
						</div>
						<div class="col-md-4 feature-3 wp2 delay-1s">
							<div class="feature-content">
								<h2><?php the_field("col_right_valeur_ajoutee"); ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
        
<!--   -->  
     
<section class="showcase">
			<div class="showcase-wrap" >
				<div class="container">
					<div class="row">
						<div class="col-md-12 ">
							<div class="col-md-4 feature-1 wp1">
								<div class="feature-content features-list-showcase">
								<h1><?php the_field("titre_domaine"); ?></h1>
								</div>
						</div>
						<div class="col-md-4 feature-2 wp1 delay-05s">
								<div class="feature-content">
								<h2 ><?php the_field("col_left_domaine"); ?></h2>
								</div>
						</div>
						<div class="col-md-4 feature-3 wp1 delay-1s">
								<div class="feature-content">
								<h2><?php the_field("col_right_domaine"); ?></h2>
								</div>
							</div>
					</div>
				</div>
			</div>
</section>
        
<!--   -->  
     
<section class="features-list" >
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="col-md-4 feature-1 wp1">
							<div class="feature-content">
								<h1><?php the_field("titre_philo"); ?></h1>
							</div>
						</div>
						<div class="col-md-4 feature-2 wp1 delay-05s">
							<div class="feature-content">
								<h2><?php the_field("col_left_philo"); ?></h2>
							</div>
						</div>
						<div class="col-md-4 feature-3 wp1 delay-1s">
							<div class="feature-content">
								<h2><?php the_field("col_right_philo"); ?>
</h2>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
        
<!--   -->  

			<div class="showcase-wrap">
				<div class="texture-overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
							<h2 class="wp1 text-center"><?php the_field("texte_bas_de_page"); ?></h2>
							</div>
						</div>		
					</div>
				</div>
			</div>
            
    <?php get_footer(); ?>        