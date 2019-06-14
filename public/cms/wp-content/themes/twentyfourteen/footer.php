<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/css.css">
		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>
            
             <div class="container footer-container">
                <ul class="footer-nav">
                    <li><a href="intestine/index.html">そもそも腸って？</a></li>
                    <li><a href="bacteria/index.html">知ろう！腸内細菌</a></li>
                    <li><a href="food/index.html">食事で腸活</a></li>
                    <li><a href="exercise/index.html">運動で腸活</a></li>
                    <li><a href="qanda/index.html">Q&amp;A</a></li>
                </ul>
            <p class="copyright">&copy;腸活、はじめませんか？</p>    
            </div><!--/footer-container-->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>