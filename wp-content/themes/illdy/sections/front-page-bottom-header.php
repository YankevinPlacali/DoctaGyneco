<?php
/**
 *    The template for displaying the bottom header section in front page.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
if ( current_user_can( 'edit_theme_options' ) ) {
	$jumbotron_title     = get_theme_mod( 'illdy_jumbotron_title', __( 'Votre guide santé' ) );
	$entry               = get_theme_mod( 'illdy_jumbotron_general_entry', __( 'lldy is a great one-page theme, perfect for developers and designers but also for someone who just wants a new website for his business. Try it now!', 'illdy' ) );
	$first_button_title  = get_theme_mod( 'illdy_jumbotron_general_first_button_title', __( 'Learn more', 'illdy' ) );
	$first_button_url    = get_theme_mod( 'illdy_jumbotron_general_first_button_url', esc_url( '#' ) );
	$second_button_title = get_theme_mod( 'illdy_jumbotron_general_second_button_title', __( 'Download', 'illdy' ) );
	$second_button_url   = get_theme_mod( 'illdy_jumbotron_general_second_button_url', esc_url( '#' ) );
} else {
	$jumbotron_title     = get_theme_mod( 'illdy_jumbotron_title', __( 'Votre guide santé' ) );
	$entry               = get_theme_mod( 'illdy_jumbotron_general_entry' );
	$first_button_title  = get_theme_mod( 'illdy_jumbotron_general_first_button_title' );
	$first_button_url    = get_theme_mod( 'illdy_jumbotron_general_first_button_url' );
	$second_button_title = get_theme_mod( 'illdy_jumbotron_general_second_button_title' );
	$second_button_url   = get_theme_mod( 'illdy_jumbotron_general_second_button_url' );
}

if ( $jumbotron_title || $entry || $first_button_title || $second_button_title ) {

	?>
	<div class="bottom-header front-page">
		<div class="container">
			<div class="row">
				<?php if ( $jumbotron_title ) : ?>
					<div class="col-sm-12">
						<h1><?php echo $jumbotron_title; ?></h1>
					</div><!--/.col-sm-12-->
				<?php endif; ?>
				<!--/.col-sm-8.col-sm-offset-2-->
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.bottom-header.front-page-->

<?php } ?>
