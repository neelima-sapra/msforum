<?php 
function msforum_settings_register( $wp_customize ) {
    $wp_customize->add_setting( 'msforum_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'msforum_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'msforum' ),
        'section'  => 'title_tagline',
        'settings' => 'msforum_logo',
    ) ) );
	
	//add copyright setting
    $wp_customize->add_setting('footer_copyright' );
    $wp_customize->add_control( 'footer_copyright',  array(
        'type'     => 'text',
        'label'    => __( 'Copyright Text', 'msforum' ),
        'section'  => 'title_tagline',
        'settings' => 'footer_copyright'
    ));      
}
add_action( 'customize_register', 'msforum_settings_register' );
?>