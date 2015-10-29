<?php

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');

?>

<!-- ! Course features
================================================== -->
<section id="course-features">
    <div class="container">
        <div class="section-header">
            <!-- If user uploaded an image -->
            <?php if( !empty($features_section_image)) : ?>
                <img src="<?php echo $features_section_image['url']; ?> " alt="<?php echo $features_section_image['alt']; ?> " />
            <?php endif; ?>

            <h2><?php echo $features_section_title; ?></h2>

            <!-- If user added body text -->
            <?php if( !empty( $features_section_body ) ): ?>
                <p class="lead">
                    <?php echo $features_section_body;  ?>
                </p><!-- /.lead -->
            <?php endif; ?>
        </div><!-- /.section-header -->

        <div class="row">

            <?php

            $args = array(
                'post_type' => 'course_feature',
                'orderby' => 'post_id',
                'order' => "ASC"
                );
            $loop = new WP_Query($args);

            if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();

            ?>

            <div class="col-sm-2">
                <i class="<?php the_field('course_feature_icon'); ?>"></i>
                <h4><?php the_title(); ?></h4>
            </div><!-- /.col-sm-2 -->

            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /#course-features -->
