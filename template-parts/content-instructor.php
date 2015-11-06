<?php

$instructor_section_title = get_field('instructor_section_title');
$instructor_name = get_field('instructor_name');
$instructor_bio_excerpt = get_field('instructor_bio_excerpt');
$instructor_full_bio = get_field('instructor_full_bio');
$twitter_username = get_field('twitter_username');
$facebook_username = get_field('facebook_username');
$google_plus_username = get_field('google_plus_username');
$num_students = get_field('num_students');
$num_reviews = get_field('num_reviews');
$num_courses = get_field('num_courses');

?>

<!-- ! Instructor
================================================== -->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                       <div class="section-header">
                            <h2><?php echo $instructor_section_title;; ?> <br /> <small><?php echo $instructor_name; ?></small></h2>
                       </div><!-- /.section-header -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <?php if ( !empty( $twitter_username ) ) { ?>
                            <a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank">
                                <li class="fa fa-twitter"></li><!-- /.fa fa-twitter -->
                            </a>
                        <?php } ?>

                        <?php if ( !empty( $facebook_username ) ) { ?>
                            <a href="https://www.facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank">
                                <li class="fa fa-facebook"></li><!-- /.fa fa-twitter -->
                            </a>
                        <?php } ?>

                        <?php if ( !empty( $google_plus_username ) ) { ?>
                            <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" class="badge social google-plus" target="_blank">
                                <li class="fa fa-google-plus"></li><!-- /.fa fa-twitter -->
                            </a>
                        <?php } ?>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <p class="lead"><?php echo $instructor_bio_excerpt; ?></p><!-- /.lead -->
                <?php echo $instructor_full_bio; ?>

                <hr />
                <h3>The Numbers<small> They Don't Lie</small></h3>

                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content"> <?php echo $num_students; ?> <span>students</span></div><!-- /.num-content -->
                        </div><!-- /.num -->
                    </div><!-- /.col-xs-4 -->
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content"><?php echo $num_reviews; ?> <span>reviews</span></div><!-- /.num-content -->
                        </div><!-- /.num -->
                    </div><!-- /.col-xs-4 -->
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content"><?php echo $num_courses; ?> <span>courses</span></div><!-- /.num-content -->
                        </div><!-- /.num -->
                    </div><!-- /.col-xs-4 -->
                </div><!-- /.row -->
            </div><!-- /.col-sm-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /#instructor -->
