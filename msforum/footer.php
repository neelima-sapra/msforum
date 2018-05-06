<div id="footer" class="site-footer white-text">
	<div id="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 footer-left-sec text-justify">
					<?php if ( get_theme_mod( 'msforum_logo' ) ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name') ); ?>" rel="home">
							<img src="<?php echo get_theme_mod( 'msforum_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name') ); ?>">
						</a>
						<?php else : ?>
							<img src="<?php bloginfo('template_directory')?>/img/sample_logo.png"/>
						<?php endif; ?>
						<div class="footer-left-text">
						<?php dynamic_sidebar('footer-left');?>
						</div>
				</div>
				<div class="col-sm-4 footer-middle-sec text-center">
					<?php dynamic_sidebar('footer-middle');?>
				</div>
				<div class="col-sm-4 text-right footer-right-sec">
					<a class="twitter-timeline" data-width="340" data-height="360" data-link-color="#FAB81E" href="https://twitter.com/3MindsDigital?ref_src=twsrc%5Etfw">Tweets by 3MindsDigital</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</div>
    </div>
	<div id="footer-bottom" class="text-center">
		<div class="container">
			<?php if ( get_theme_mod( 'footer_copyright' ) ) : ?>
				<?php echo get_theme_mod('footer_copyright');?>
				<?php else : ?>
			<?php endif; ?>
		</div>
	</div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
	<script>(function () {
                var css = document.createElement('link');
                css.href = '//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css';
                css.rel = 'stylesheet';
                css.type = 'text/css';
                document.getElementsByTagName('head')[0].appendChild(css);
                var fonts = document.createElement('link');
                fonts.href = 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700';
                fonts.rel = 'stylesheet';
                fonts.type = 'text/css';
                document.getElementsByTagName('head')[0].appendChild(fonts);

            })();</script>
	<?php wp_footer(); ?> 
  </body>
</html>