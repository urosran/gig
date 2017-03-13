<?php
/**
 * The Footer Sidebar containing the footer widget areas.
 *
 * @package Catch Themes
 * @subpackage Rock Star
 * @since Rock Star 0.3
 */

/* The footer widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if (   ! is_active_sidebar( 'footer-1'  )
	&& ! is_active_sidebar( 'footer-2' )
	&& ! is_active_sidebar( 'footer-3'  )
) {
	return;
}

// If we get this far, we have widgets. Let do this.
?>
    <div id="supplementary" <?php rock_star_footer_sidebar_class(); ?>>
        <div class="wrapper">
            <div class="footer-widget-wrapper clearfix">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div id="first" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div><!-- #first .widget-area -->
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div id="second" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div><!-- #second .widget-area -->
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div id="third" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div><!-- #third .widget-area -->
                <?php endif; ?>
            </div><!-- .footer-widget-wrapper -->
        </div><!-- .wrapper -->
    </div><!-- #supplementary -->