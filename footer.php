<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

<?php wp_footer(); ?>

<?php include_once "inc/sign-up.php"; ?>
<?php include_once "inc/modal.php"; ?>

    <!-- ! Footer
    ================================================== -->
    <footer>
        <div class="container">
            <div class="col-sm-2">
                <p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress" /></a></p>
            </div><!-- /.col-sm-3 -->
            <div class="col-sm-6">

                <?php
                wp_nav_menu( array(
                    'menu'              => 'footer',
                    'theme_location'    => 'footer',
                    'container'         => 'nav',
                    'menu_class'        => 'footer-menu list-unstyled list-inline',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
            </div><!-- /.col-sm-6 -->
            <div class="col-sm-4">
                <p class="copyright"><?php bloginfo( 'name' ); ?> &copy; <?php echo date('Y'); ?> | <a href="http://www.newstreamsstudio.com">New Streams Studio</a></p><!-- /.pull-right -->
            </div><!-- /.col-sm-3 -->
        </div><!-- /.container -->
    </footer>


<!-- ! Core scripts
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory') ; ?>/assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php bloginfo('template_directory') ; ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory') ; ?>/assets/js/main.js"></script>

    <!-- TypeKit Font -->
<!-- <script src="https://use.typekit.net/inz8twa.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script> -->

</body>
</html>
