<?php
/**
    Template Name: Home Page
 */

get_header();


get_template_part( 'template-parts/content', 'hero' );

get_template_part( 'template-parts/content', 'optin' );

get_template_part( 'template-parts/content', 'boost' );

get_template_part( 'template-parts/content', 'benefits' );

get_template_part( 'template-parts/content', 'coursefeatures' );

get_template_part( 'template-parts/content', 'projectfeatures' );

get_template_part( 'template-parts/content', 'courseintro' );

get_template_part( 'template-parts/content', 'instructor' );

get_template_part( 'template-parts/content', 'testimonials' );


get_footer();

?>
