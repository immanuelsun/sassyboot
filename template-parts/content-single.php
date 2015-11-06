<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<h1 class="entry-title">
			<?php the_title(); ?>
		</h1>

		<?php if ( 'post' === get_post_type() ) : ?>
               <div class="post-details">
                <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                <i class="fa fa-clock-o"></i> <time> <?php the_date(); ?></time>
                <i class="fa fa-folder-open-o"></i> <?php the_category( ', ' ); ?>
                <i class="fa fa-tags"></i> Tagged: <?php the_tags(); ?>
                <?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i> ', '' ); ?>
                <div class="post-comments-badge">
                    <div class="post-comments-link">
                        <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 0, 1, '%'); ?></a>
                    </div><!-- /.post-comments-link -->
                </div><!-- /.post-comments-badge -->
            </div><!-- /.post-details -->

    <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="post-image">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    </div><!-- /.post-image -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootstrap2wordpress' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

