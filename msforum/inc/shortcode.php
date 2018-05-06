<?php 
/*
*	Shortcodes File
*/

function my_recent_post()
 {
  global $post;

  $html = "";

  $my_query = new WP_Query( array(
       'post_type' => 'post',
       'posts_per_page' => -1
  ));

  if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();

		$html .= "<div class='single-blog-post'> ";
       $html .= "<h3><a href=\"" . get_permalink() . "\" >" . get_the_title() . "</a> </h3>";
       $html .= "<p>" . get_the_excerpt() . "</p>";
       $html .= "<a href=\"" . get_permalink() . "\" class=\"button\">Read more</a>";
		$html .= "</div>";
	   
  endwhile;
    wp_reset_postdata();
endif;

  return $html;
 }
 add_shortcode( 'recent_blogposts', 'my_recent_post' );
?>