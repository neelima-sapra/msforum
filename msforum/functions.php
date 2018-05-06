<?php
/*
 *  Name: Theme Functions 
 *  Descripion: Common function file
 */

include_once get_template_directory() . '/inc/customizer.php';
include_once get_template_directory() . '/inc/shortcode.php';

add_theme_support('post-thumbnails', array('post','ms_product'));

/* Register Nav Menus */
register_nav_menus( array(
	'header_menu' => 'Header Main Navigation'
) );

/**
 *  Theme menu use to show main menu 
 */
function theme_menu() {
    echo '<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>';
    echo '<div class="collapse navbar-collapse" id="navbar-content">';
	wp_nav_menu( array(
            'theme_location' => 'header_menu', // Defined when registering the menu
            'menu_id'        => 'primary-menu',
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'navbar-nav ml-auto',
        ) );
	echo '</div>';
}

/**
 * Use to  show theme logo
 */
function theme_logo() {
    if (is_home() || is_front_page()) {
        ?>
        <h1 class="logo">
            <img class="img-responsive" src="<?php echo esc_url(get_theme_mod('msforum_logo')); ?>" alt="<?php bloginfo('name') ?>" />
        </h1>
    <?php } else { ?>
        <h2 class="logo">
            <a href="<?php bloginfo('url'); ?>">
                <img class="img-responsive"  src="<?php echo esc_url(get_theme_mod('msforum_logo')); ?>" alt="<?php bloginfo('name') ?>" />
            </a>
        </h2>
        <?php
    }
}

/* Register Post Types */
function msforum_post_type() {
    $args = array(
      'public' => true,
      'label'  => 'Products',
	  'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' )
    );
    register_post_type( 'ms_product', $args );
}
add_action( 'init', 'msforum_post_type' );

/* Register Custom Taxonomies */
function msforum_tax() {
	register_taxonomy(
		'ms_product_cat',
		'ms_product',
		array(
			'label' => __( 'Product Category' ),
			'rewrite' => array( 'slug' => 'ms_product_cat' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'msforum_tax' );

/* Register Sidebars */
function msforum_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Left Sidebar', 'msforum' ),
        'id' => 'footer-left',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
      	'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name' => __( 'Footer Middle Sidebar', 'msforum' ),
        'id' => 'footer-middle',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
      	'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'msforum' ),
        'id' => 'blog-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
      	'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'msforum_widgets_init' );
?>