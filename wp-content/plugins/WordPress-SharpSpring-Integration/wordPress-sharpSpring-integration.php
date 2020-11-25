<?php
/**
 * Plugin Name: WordPress SharpSpring Integration
 * Plugin URI: http://hocwp.net // Địa chỉ trang chủ của plugin
 * Description: Đây là plugin đầu tiên mà tôi viết dành riêng cho WordPress, chỉ để học tập mà thôi. // Phần mô tả cho plugin
 * Version: 1.0 // Đây là phiên bản đầu tiên của plugin
 * Author: Sau Hi // Tên tác giả, người thực hiện plugin này
 * Author URI: http://sauhi.com // Địa chỉ trang chủ của tác giả
 * License: GPLv2 or later // Thông tin license của plugin, nếu không quan tâm thì bạn cứ để GPLv2 vào đây
 */
?>

<?php
class JackQuy_SharpSprings {

	function __construct() {
		// create custom plugin settings menu
		add_action('admin_menu', array($this, 'my_cool_plugin_create_menu'));
		add_action('wp_footer', array($this, 'echo_test'));

	}

	public function my_cool_plugin_create_menu() {
		//create new top-level menu
		add_menu_page('My Cool Plugin Settings', 'SharpSpring Integration', 'administrator', __FILE__, array($this, 'my_cool_plugin_settings_page') );

		//call register settings function
		add_action( 'admin_init', array($this, 'register_my_cool_plugin_settings') );
	}

	public function register_my_cool_plugin_settings() {
		register_setting( 'my-cool-plugin-settings-group', 'enable_tracking' );
		register_setting( 'my-cool-plugin-settings-group', 'some_other_option' );
	}

	function echo_test() {
		if(get_option('enable_tracking') == 1) {
			echo get_option('some_other_option');
		}
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
//require_once dirname(__FILE__) . "\public.php";

$Jack_SharpSprings = new JackQuy_SharpSprings();

?>


