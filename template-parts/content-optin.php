<?php
$id                = get_the_id();
$optin_text        = get_post_meta($id, 'optin_text', true );
$optin_text        = get_post_meta($id, 'optin_text', true );
$optin_button_text = get_post_meta($id, 'optin_button_text', true );
?>

<!-- ! Opt in section
================================================== -->
<section id="optin">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <p class="lead">
                    <?php echo $optin_text; ?>
                </p><!-- /.lead -->
            </div><!-- /.col-sm-8 -->
            <div class="col-sm-4">
                <button class="btn btn-lg btn-success btn-block" data-toggle="modal" data-target="#myModal"> <?php echo $optin_button_text; ?> </button>
            </div><!-- /.col-sm-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.optin -->
