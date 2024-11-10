<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package XD_to_WordPress
 */

?>

	<footer id="colophon" class="site-footer">
        <div class="container">
            <div class="widget-columns">
                <div class="widget-column">
                    <?php if (is_active_sidebar('column-1')) : ?>
                        <?php dynamic_sidebar('column-1'); ?>
                    <?php endif; ?>
                </div>

                <div class="widget-column">
                    <?php if (is_active_sidebar('column-2')) : ?>
                        <?php dynamic_sidebar('column-2'); ?>
                    <?php endif; ?>
                </div>

                <div class="widget-column">
                    <?php if (is_active_sidebar('column-3')) : ?>
                        <?php dynamic_sidebar('column-3'); ?>
                    <?php endif; ?>
                </div>

                <div class="widget-column">
                    <?php if (is_active_sidebar('column-4')) : ?>
                        <?php dynamic_sidebar('column-4'); ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
		<div class="site-info">
			<div class="container copy">
                <div class="copy-left">
                    © Copyright
                </div>
                <div class="copy-right">
                    <ul>
                        <li><a href="#"></a>Terms</li>
                        <li><a href="#">Notice</a></li>
                    </ul>
                </div>
            </div>
			
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function($) {
        jQuery('.faq-question').click(function() {
            jQuery(this).next('.faq-answer').slideToggle();

            // Toggle the plus/minus icons
            const icon = jQuery(this).find('.icon-toggle');
            if (icon.hasClass('fa-plus')) {
                icon.removeClass('fa-plus').addClass('fa-minus');
            } else {
                icon.removeClass('fa-minus').addClass('fa-plus');
            }
        });
    });
</script>
</body>
</html>
