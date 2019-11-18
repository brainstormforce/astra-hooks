<?php
/**
 * White Label Form
 *
 * @package Astra Hooks
 */

?>
<li>
	<div class="branding-form postbox">
		<button type="button" class="handlediv button-link" aria-expanded="true">
			<span class="screen-reader-text"><?php esc_html_e( 'Astra Hooks Branding', 'astra-hooks' ); ?></span>
			<span class="toggle-indicator" aria-hidden="true"></span>
		</button>
		<h2 class="hndle ui-sortable-handle">
			<span><?php esc_html_e( 'Astra Hooks Branding', 'astra-hooks' ); ?></span>
		</h2>
		<div class="inside">
			<div class="form-wrap">
				<div class="form-field">
					<label><?php esc_html_e( 'Plugin Name:', 'astra-hooks' ); ?>
						<input type="text" name="ast_white_label[astra-hooks][name]" class="placeholder placeholder-active" value="<?php echo esc_attr( $settings['astra-hooks']['name'] ); ?>">
					</label>
				</div>
				<div class="form-field">
					<label><?php esc_html_e( 'Plugin Description:', 'astra-hooks' ); ?>
						<textarea name="ast_white_label[astra-hooks][description]" class="placeholder placeholder-active" rows="2"><?php echo esc_attr( $settings['astra-hooks']['description'] ); ?></textarea>
					</label>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</li>
