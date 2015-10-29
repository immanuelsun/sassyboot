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
            <div class="col-sm-3">
                <p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress" /></a></p>
            </div><!-- /.col-sm-3 -->
            <div class="col-sm-6">
                <ul class="footer-menu list-unstyled list-inline">
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Resources</a></li>
                    <li><a href="">Contact</a></li>
                    <li class="signup-link"><a href="" class="btn btn-xs btn-success">Sign up now!</a></li>
                </ul><!-- /.list-unstyled list-inline -->
            </div><!-- /.col-sm-6 -->
            <div class="col-sm-3">
                <p class="copyright">&copy; 2015 |  <a href="/">New Streams Design</a></p><!-- /.pull-right -->
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
