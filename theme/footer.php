<?php wp_footer(); ?>
<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<h1 class="footer-logo">
							<img src="<?php bloginfo('template_url'); ?>/img/logo-amandel-.png" alt="Footer Logo amandel">
						</h1>
					</div>
					<div class="col-md-10">
						<ul class="footer-nav">
							<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
						</ul>
					</div>
				</div>
			</div>


			<div class="container">
            		<div class="row">
						<div class="col-md-12">
							<div class="footer-bottom-inner center">
								<p class="copyright pull-left clear-float-on-mobile">
									amandel s.a. | La Vulpillière 61B | CH- 1070 Puidoux | +41 21 946 16 60 |
                                 <br><br>by <a href="http://www.fgdesign.ch/" target="_blank">fgdesign</a>
								</p>
							</div>
						</div>
					</div>
			</div>

</footer>
        
<!--   -->  
     
		<div class="overlay overlay-boxify">
			<nav>
				<ul class="footer-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'pages' ) ); ?>
				</ul>
			</nav>
		</div>
        
               
<!--   -->  
             

		<script src="<?php bloginfo('template_url'); ?>/js/global.js"></script>
        
        
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88092372-1', 'auto');
  ga('send', 'pageview');
</script>
        
<!--   -->  

	</body>
</html>