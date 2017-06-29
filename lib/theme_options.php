<?php
$options = get_option( 'portfolio_theme_options' ); // pobranie aktywnych opcji z bazy
// Inicjalizacja opcji motywu
function theme_options_init(){
	register_setting( 'portfolio_options', 'portfolio_theme_options' );
}
add_action( 'admin_init', 'theme_options_init' );

// Aktywacja pozycji w menu motywu
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options' ), __( 'Theme Options' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
add_action( 'admin_menu', 'theme_options_add_page' );

// Stworzenie strony z opcjami motywu
function theme_options_do_page() { ?>

	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . __( 'Theme Options' ) . "</h2>"; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'portfolio_options' ); ?>
			<?php $options = get_option( 'portfolio_theme_options' ); ?>


			<table class="form-table">


			<tr valign="top">
				<th scope="row">
					<?php _e( 'Kim jestem' ); ?>
				</th>
				<td>
					<textarea style="width:800px;height:200px;" name="portfolio_theme_options[open_hours]"><?php echo $options['open_hours']; ?></textarea>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<?php _e( 'Moje zdjęcie' ); ?>
				</th>
				<td>
					<textarea style="width:800px;height:40px;" name="portfolio_theme_options[photo_about_me]"><?php echo $options['photo_about_me']; ?></textarea>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<?php _e( 'Doświadczenie' ); ?>
				</th>
				<td>
					<textarea style="width:800px;height:40px;" name="portfolio_theme_options[experience]"><?php echo $options['experience']; ?></textarea>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<?php _e( 'Doświadczenie opis' ); ?>
				</th>
				<td>
					<textarea style="width:800px;height:40px;" name="portfolio_theme_options[experience_desc]"><?php echo $options['experience_desc']; ?></textarea>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<?php _e( 'Social media' ); ?>
				</th>
				<td>
					<textarea style="width:800px;height:200px;" name="portfolio_theme_options[social_media]"><?php echo $options['social_media']; ?></textarea>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<?php _e( 'Text stopka' ); ?>
				</th>
				<td>
					<textarea style="width:800px;height:200px;" name="portfolio_theme_options[Footer_text]"><?php echo $options['Footer_text']; ?></textarea>
				</td>
			</tr>


      </table>

			<?php submit_button(); ?>
		</form>
	</div>

<?php } ?>
