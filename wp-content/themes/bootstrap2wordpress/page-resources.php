<?php

/**
 *  Template Name: Resources Page
 */

?>

<?php get_header(); ?>

<?php
$thumb_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<?php if ( has_post_thumbnail( )): ?>
    <section class="feature-image" style=" background: url(' <?php echo $thumb_url; ?> ') no-repeat; -webkit-background-size: cover;  background-size: cover;" data-type="background", data-speed="4">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </section><!-- /.feature-image feature-image-default -->
<?php else: ?>
    <section class="feature-image feature-image-default" data-type="background", data-speed="4">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </section><!-- /.feature-image feature-image-default -->
<?php endif ?>

    <!-- ! Main Content
    ================================================== -->
    <div class="container">
        <div class="row" id="primary">
            <div id="content" class="col-sm-12">
                <section class="main-content">
                <?php if (have_posts()) : while (have_posts()) : the_post() ?>

                <?php the_content( ); ?>

                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>

            </section><!-- /.main-content -->
        </div><!-- /#content.col-sm-12 -->
    </div><!-- /#primary.row -->
</div><!-- /.container -->

<?php get_footer( ); ?>
