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

                <hr />

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

                        <?php the_content(); ?>

                        <?php if ( !empty($button_text) ) { ?>
                            <a href="<?php echo $resource_url; ?>" class="btn btn-success"> <?php echo $button_text; ?></a>
                        <?php } ?>

                    </div><!-- /.resource -->

                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>

            </div><!-- /.resource-row clearfix -->
        </section><!-- /.main-content -->
    </div><!-- /#content.col-sm-12 -->


</div><!-- /#primary.row -->
</div><!-- /.container -->

<?php get_footer( ); ?>
