<?php
class JackQuy_SharpSprings {

	function JackQuy_SharpSprings() {
		// create custom plugin settings menu
		add_action('admin_menu', array($this, 'my_cool_plugin_create_menu'));
	}

	public function my_cool_plugin_create_menu() {
		//create new top-level menu
		add_menu_page('My Cool Plugin Settings', 'SharpSpring Integration', 'administrator', __FILE__, array($this, 'my_cool_plugin_settings_page') , plugins_url('/images/icon.png', __FILE__) );

		//call register settings function
		add_action( 'admin_init', array($this, 'register_my_cool_plugin_settings') );
	}
	public function register_my_cool_plugin_settings() {
		register_setting( 'my-cool-plugin-settings-group', 'enable_tracking' );
		register_setting( 'my-cool-plugin-settings-group', 'some_other_option' );
	}
	public function my_cool_plugin_settings_page() {
		?>
		<div class="wrap">
		<h1>SharpSpring Integration</h1>
		<form method="post" action="options.php">
		    <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
		    <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
		    <table class="form-table">
		        <tr valign="top">
		        <th scope="row">Enable Tracking</th>
		        <td><input type="checkbox" name="enable_tracking" value="1"
		        	<?php if ( 1 == get_option('enable_tracking') ) echo 'checked="checked"'; ?> />
		        </td>
		        </tr>
		         
		        <tr valign="top">
		        <th scope="row">Sample SharpSpring Tracking Code</th>
		        <td>
					<textarea name="some_other_option" id="" cols="30" rows="10"><?php echo esc_attr( get_option('some_other_option') ); ?></textarea>
		        </td>
		    </table>
		    
		    <?php submit_button(); ?>

		</form>
		</div>
		<?php
	}
}
?>