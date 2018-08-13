$wp_customize->add_setting('home-slider-third-image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'home-slider-third-image',
            array(
                'label'      => __( 'Third Image', 'theme_name' ),
                'section'    => 'home-slider-images',
                'settings'   => 'home-slider-third-image'
            )
        )
    );