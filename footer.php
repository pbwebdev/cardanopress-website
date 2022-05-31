<?php

/**
 * The template for displaying the footer
 *
 * @package CardanoPress Bootstrap
 * @since 0.1.0
 */

$theme = wp_get_theme( CARDANOPRESS_BOOTSTRAP_THEME_BASE );

?>

		</div><!-- .site-content -->

		<?php get_sidebar( 'footer' ); ?>

<footer class="footer py-4 py-md-5 mt-5 bg-light clearfix">
    <div class="container py-4 py-md-5 px-4 px-md-3">
        <div class="row">
            <div class="col-lg-3 mb-3">
                <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
                    <span class="fs-5">CardanoPress</span>
                </a>
                <ul class="list-unstyled small text-muted">
                    <li class="mb-2">We built this plugin to help with the adoption of the Cardano blockchain.</li>
                    <li class="mb-2">Built with an open source mindset, <a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html" title="GPL2 license">GPL2</a> , just like WordPress & Cardano.</li>
                    <li class="mb-2">Building for Cardano</li>
                </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3">

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 1") ) : ?>
                <?php endif;?>

            </div>
            <div class="col-6 col-lg-2 mb-3">

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 2") ) : ?>
                <?php endif;?>

            </div>
            <div class="col-6 col-lg-2 mb-3">

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 3") ) : ?>
                <?php endif;?>

            </div>
            <div class="col-6 col-lg-2 mb-3">

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 4") ) : ?>
                <?php endif;?>

            </div>
        </div>
    </div>
</footer>


		<footer class="site-footer py-2 bg-dark text-light clearfix">
			<div class="container">
				<nav class="d-flex align-items-center justify-content-between">
					<?php cardanopress_bootstrap_footer_menu(); ?>

					<div class="copyright">
						<small>Copyright &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-light"><?php bloginfo( 'name' ); ?></a>.</small>
						<span class="small">Powered by <a href="<?php echo esc_url( $theme->get( 'AuthorURI' ) ); ?>" class="text-light"><?php echo esc_html( $theme->get( 'Author' ) ); ?></a>.</span>
					</div>
				</nav>
			</div>
		</footer><!-- .site-footer -->

		<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	</body>
</html>

<!-- A generator-themeplate project - https://github.com/kermage/generator-themeplate -->
