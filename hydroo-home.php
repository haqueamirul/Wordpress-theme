<?php 
/*
Template Name: Home
*/

get_header(); 

get_template_part( 'template-parts/homepage/welcome' );
get_template_part( 'template-parts/homepage/about' );
get_template_part( 'template-parts/homepage/design' );
get_template_part( 'template-parts/homepage/concept' );
get_template_part( 'template-parts/homepage/skills' );
get_template_part( 'template-parts/homepage/portfolio' );
get_template_part( 'template-parts/homepage/fact' );
get_template_part( 'template-parts/homepage/process','mission' );
get_template_part( 'template-parts/homepage/pricing' );
get_template_part( 'template-parts/homepage/contact' );

get_footer(); ?>