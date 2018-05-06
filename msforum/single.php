<?php get_header(); ?>
<div id="page-wrap" class="<?php echo strtolower(str_replace(" ", "-", get_the_title())); ?>">
    <div id="page-content" class="single-section">
        <div class="container">
		<div class="row">
            <div class="col-sm-8 page-content-wrap text-justify">
				<h1><?php the_title();?></h1>
				<?php if(has_post_thumbnail()):?>
					<div class="post-featured">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif;
				?>
					<?php
					while (have_posts()) : the_post();
						the_content();
					endwhile;
					wp_reset_query();
					?>
            </div>
			<div id="page-sidebar" class="col-sm-4">
				<?php dynamic_sidebar('blog-sidebar');?>
			</div>
			</div>
        </div>
    </div><!--End Home Content-->
</div>
<?php get_footer(); ?>