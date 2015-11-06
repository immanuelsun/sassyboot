<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
</section><!-- /.feature-image feature-image-default-alt -->

<!-- ! Blog Content
    ================================================== -->
    <div class="container">
    	<div class="row" id="primary">
			<!-- ! Mian Content
			================================================== -->
    		<main id="content" class="col-sm-8" role="main">


		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

            <hr />

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- /#content.col-sm-8 -->

			<!-- ! Sidebar
			================================================== -->
    		<aside class="col-sm-4">

				<?php get_sidebar(); ?>

			</aside>
        </div><!-- /#primary.row -->
    </div><!-- /.container -->


<?php get_footer(); ?>
