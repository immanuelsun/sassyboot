<?php
/*  ! Custom Fields
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
$id                = get_the_id();
$prelaunch_price   = get_post_meta($id, 'prelaunch_price', true );
$launch_price      = get_post_meta($id, 'launch_price', true );
$final_price       = get_post_meta($id, 'final_price', true );
$course_url        = get_post_meta($id, 'course_url', true );
$hero_button_text  = get_post_meta($id, 'hero_button_text', true );
?>


<!-- ! Hero
================================================== -->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">
                <div class="col-sm-5">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" class="logo" />
                </div><!-- /.col-sm-5 -->
                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p class="lead">
                        <?php bloginfo( 'description' ); ?>
                    </p>

                    <div class="price-timeline">
                        <div class="price active">
                            <h4>Pre-launch Price<small> Ends soon!</small></h4>
                            <span><?php echo $prelaunch_price; ?></span>
                        </div><!-- /.price -->
                        <div class="price">
                            <h4>Launch Price<small> Coming soon!</small></h4>
                            <span><?php echo $launch_price; ?></span>
                        </div><!-- /.price -->
                        <div class="price">
                            <h4>Final Price<small> Coming soon!</small></h4>
                            <span><?php echo $final_price; ?></span>
                        </div><!-- /.price -->
                    </div><!-- /.price-timeline -->
                    <p><a href="<?php echo $course_url; ?>" class="btn btn-lg btn-danger" roll="button"><?php echo $hero_button_text; ?></a></p>
                </div><!-- /.col-sm-7 hero-text -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </article>
</section> <!-- #hero -->
