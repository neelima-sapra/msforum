<?php get_header(); ?>
<div id="blog-posts" class="blog-posts-sec single-section text-center">
	<div class="container">
	<h2>Recent Posts</h2>
	<?php
		$postquery = new WP_Query( array( 
	'post_type' => 'post',
	'posts_per_page' => '4'
	) );                  
if ( $postquery->have_posts() ) : ?>
    <?php while ( $postquery->have_posts() ) : $postquery->the_post(); ?> 
			<div class="blog-main">
				<div class="blog-post">
					<h3>
						<a href="<?php echo get_permalink($recent["ID"])?>">
							<?php the_title(); ?>
						</a>
					</h3>
					<span class="blog-post-meta"></span>
					<div>
						<?php echo wp_trim_words(get_the_content(), 15);?>
					</div>
				</div>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
    <!-- show 404 error here -->
<?php endif; ?>
	<a class="btn" href="">Our Blog</a>
	</div>
</div>
<div id="recent-products" class="recent-products-sec single-section text-center">
	<div class="container">
	<h2>Recent Products</h2>
	<?php $productquery = new WP_Query( array( 
	'post_type' => 'ms_product',
	'posts_per_page' => '4'
	) );                  
if ( $productquery->have_posts() ) : ?>
    <?php while ( $productquery->have_posts() ) : $productquery->the_post(); ?>   
        <div class="single-product">
			<div class="product-image bg-cover" style="background-image: url('<?php the_post_thumbnail_url($post->ID)?>')">
			</div>
            <div class="product-meta">
				<h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<span class="product-price">
				<label>Price:</label> <?php echo get_post_meta( $post->ID,'price',true); ?>
				</span>
				<span class="product-cat">
					<?php 
					$terms = get_the_terms( $post->ID, 'ms_product_cat' );
					if ($terms) {
						echo '<label>Listed In:</label> ';
						foreach($terms as $term) {
						  echo '<span>'.$term->name.'</span>';
						} 
					}
					?>
				</span>
			</div>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
    <!-- show 404 error here -->
<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>