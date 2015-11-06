<?php

$intro_section_title = get_field('intro_section_title');
$intro_youtube_link = get_field('intro_youtube_link');

?>

<!-- ! Video featurette
================================================== -->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-header">
                    <h2><?php echo $intro_section_title; ?></h2>
                </div><!-- /.section-header -->
                <iframe width="100%" height="415" src="<?php echo $intro_youtube_link; ?>" frameborder="0" allowfullscreen></iframe>
            </div><!-- /.col-sm-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /#featurette -->
