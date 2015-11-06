<?php

$project_feature_title = get_field('project_feature_title');
$project_feature_body = get_field('project_feature_body');

?>

<!-- ! Project features
================================================== -->
<section id="project-features">
    <div class="container">

        <div class="section-header">
            <h2><?php echo $project_feature_title; ?></h2>
        </div><!-- /.section-header -->
        <p class="lead">
            <?php echo $project_feature_body; ?>
        </p><!-- /.lead -->

        <div class="row">
            <?php

            $args = array(
                'post_type' => 'project_feature',
                'orderby' => 'post_id',
                'order' => "ASC"
                );
            $loop = new WP_Query($args);

            if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();

            ?>

                <div class="col-sm-4">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?> </p>
                </div><!-- /.col-sm-4 -->

            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>

        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /#project-features -->
