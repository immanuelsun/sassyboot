<?php


get_header(); ?>

<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
	<h1 class="page-title">Blog</h1><!-- /.page-title -->
</section><!-- /.feature-image feature-image-default-alt -->

    <!-- ! Blog Content
    ================================================== -->
    <div class="container">
    	<div class="row" id="primary">
			<!-- ! Main Content
			================================================== -->
    		<main id="content" class="col-sm-8" role="main">

    		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


    		</main><!-- /#content.col-sm-8 -->

			<!-- ! Sidebar
			================================================== -->
    		<aside class="col-sm-4">

                <?php get_sidebar(); ?>
				<?php dynamic_sidebar('sidebar-2' ) ?>

			</aside>
        </div><!-- /#primary.row -->
    </div><!-- /.container -->


<?php get_footer(); ?>
