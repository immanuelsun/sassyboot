<!-- ! Testimonials
================================================== -->
<section id="kudos">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2>What People Are Saying About Us</h2>

                <!-- Testimonials -->
                <?php

                $args = array(
                    'post_type' => 'testimonial',
                    'orderby' => 'post_id',
                    'order' => "ASC"
                );

                $loop = new WP_Query($args);

                if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();

                ?>

                <div class="row testimonial">
                    <div class="col-sm-4">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                    </div><!-- /.col-sm-4 -->
                    <div class="col-sm-8">
                        <blockquote><?php the_content( ); ?>
                            <cite>&mdash; <?php the_title(); ?></cite>
                        </blockquote>

                    </div><!-- /.col-sm-8 -->
                </div><!-- /.row testimonial -->

                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>

            </div><!-- /.col-sm-8 col-sm-offset-2 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /#kudos -->
