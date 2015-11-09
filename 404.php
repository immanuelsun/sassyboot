<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>
<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
	<h1 class="page-title">Bummer! That page can't be found.</h1><!-- /.page-title -->
</section><!-- /.feature-image feature-image-default-alt -->

	<!-- ! Blog Content
	================================================== -->
	<div class="container">
		<div class="row" id="primary">
			<!-- ! Main Content
			================================================== -->
			<main id="content" class="col-sm-8" role="main">
				<div class="error-404 not-found">
					<div class="page-content">
						<h2>Don't fret. Let's get your back on track.</h2>
						<!-- Resources -->
						<h3>Resources</h3>
						<p>Perhaps you are looking for a specific resource?</p>
						<div class="resource-row clearfix">

							<?php

							$args = array(
								'post_type' => 'resource',
								'orderby' => 'post_id',
								'order' => "ASC"
								);

							$loop = new WP_Query($args);

							if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();

							$resource_image = get_field('resource_image');
							$resource_url = get_field('resource_url');
							$add_button = get_field('add_button');
							$button_text = get_field('button_text');

							?>

							<div class="resource">
								<?php if ( !empty($resource_image) ) { ?>
								<img src="<?php echo $resource_image['url']; ?>" alt="Justhost" />
								<?php } ?>
								<h3>
									<a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a>
								</h3>

								<?php the_excerpt(); ?>

								<?php if ( !empty($button_text) ) { ?>
								<a href="<?php echo $resource_url; ?>" class="btn btn-success"> <?php echo $button_text; ?></a>
								<?php } ?>

							</div><!-- /.resource -->

						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

					</div><!-- /.resource-row clearfix -->

					<!-- Categories -->
					<h3>Categories</h3>
					<p>... or maybe a popular category?</p>
					<div class="widget widget-categories">
						<h4 class="widget-title">Most Used Categories</h4><!-- /.widget-title -->
						<ul>
							<?php

							$args = array (
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10
							);

							wp_list_categories( $args );

							?>
						</ul>
					</div><!-- /.widget widget-categories -->

					<!-- Archives -->
					<h3>Archives</h3>
					<p>You can always sort through our arhcives...</p>
					<?php the_widget( 'WP_Widget_Archives', 'title=Our Arhives', 'before_title=<h4 class="widgettitle">&after_title=</h4> <hr />' ); ?>

					<p>...or you can go back to the <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> home page </a>.</p>
				</div><!-- /.page-content -->
			</div><!-- /.error-404 not-found -->
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
