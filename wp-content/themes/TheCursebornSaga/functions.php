<?php
/*
@Khai báo hằng giá trị
	@THEME_URL = lấy đường dẫn thư mục theme
	@CORE = lấy đường dẫn của thư mục /core
*/
	define('THEME_URL', get_stylesheet_directory());
	define('CORE', THEME_URL . '/core');

/*
@Nhúng file /core/init.php
*/
require_once(CORE . '/init.php');
//var_dump($_POST);
/*
@Thiết lập chiều rộng nội dung
*/
if( !isset($content_width)) {
	$content_width = 620;
}

/*
@Khai báo chức năng của theme
*/
if( !function_exists('phamquy_theme_setup')) {
	function phamquy_theme_setup() {
		//Thiết lập textdomain
		$language_folder = THEME_URL.'/languages';
		load_theme_textdomain('phamquy', $language_folder );

		//Tự động thêm link RSS lên <head>
		add_theme_support('automatic-feed-links');

		//Thêm port thumbnail
		add_theme_support('post-thumbnails');

		// Post Format
		add_theme_support('post-formats', array(
			'image',
			'video',
			'gallery',
			'link'
		));

		// Thêm title-tag
		add_theme_support('title-tag');

		// Thêm custom background
		$default_background = array(
			'default-color' => '#e8e8e8'
		);
		add_theme_support('custom-background', $default_background);

		//Thêm menu
		// register_nav_menu('primary-menu', __('Primary Menu', 'phamquy'));
		register_nav_menus( array(
	        'primary-menu' => 'Primary Menu',
	        'respon-menu' => 'Respon Menu'
		) );

		//Tạo sidebar
		$sidebar = array(
			'name' => __('Main Sidebar', 'phamquy'),
			'id' => 'main-sidebar',
			'description' => __('Default sidebar'),
			'class' => 'main-sidebar',
			'before_title' => '<h3 class = "widgettitle">',
			'after_title' => '</h3>'
		);
		register_sidebar($sidebar);
	}
	add_action('init', 'phamquy_theme_setup');

}

//thêm logo cho trang
// function tp_admin_logo() {
// 	echo '<img src="'.plugins_url('logo.png', __FILE__ ).'" >';
// }
// add_action('admin_notices', 'tp_admin_logo');

/*
	Template function
*/
if(!function_exists('quyjack_header')) {
	function quyjack_header() { ?>
		<div class="site-name">
			<?php 
				if( is_home()) {
					printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>', 
					get_bloginfo('url'),
					get_bloginfo('description'), 
					get_bloginfo('sitename') );
				} else {
					printf('<p><a href="%1$s" title="%2$s">%3$s</p>', 
					get_bloginfo('url'),
					get_bloginfo('description'), 
					get_bloginfo('sitename') );
				}
				
			?>
		</div>
		<!-- <div class="site-description"> -->
			<?php// bloginfo('description'); ?>
		<!-- </div> -->
		 <?php
	}
}

/*
	Thiết lập menu
*/
// if( !function_exists('jack_menu')) {
// 	function jack_menu($menu) {
// 		$menu = array(
// 			'theme_location' => $menu,
// 			'container' => 'nav',
// 			'container_class' => $menu,
// 			'items_wrap' => '<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>'
// 		);
// 		wp_nav_menu($menu);
// 	}
// }

/*
	Hàm tạo phân trang
*/
	//kiểm tra hàm đã tồn tại hay chưa, nếu chưa thì tạo 1 function mới
if( !function_exists('jack_pagination')) {
	function jack_pagination() {
		//chỉ làm phân trang nếu query hiện tại tồn tại 2 trang trở lên
		if($GLOBALS['wp_query'] -> max_num_pages < 2) {
			return ''; //nếu nhỏ hơn 2 thì trả về rỗng
		} ?>
		<nav class="pagination" role="navigattion">
			<!-- get_next_posts_link() kiểm tra sự tồn tại liệu có trang trước(củ) hay ko -->
			<!-- // next_posts_link() trả về đường link củ hơn để chuyển sang trang trước đó -->
			<?php if( get_next_posts_link()) : ?> 
				<div class="prev"><?php next_posts_link( __('Older Posts', 'phamquy')); ?>
				</div>
			<?php endif; ?>
			<!-- trả về trang đầu(trang mới) -->
			<?php if(get_previous_posts_link()) : ?>
				<div class="next"><?php previous_posts_link( __('Newest Posts', 'phamquy')); ?></div>
			<?php endif; ?>
		</nav>
	<?php }
}

/*
	Hiển thị thumbnail
*/
if(!function_exists('jack_thumbnail')) {
	function jack_thumbnail($size) {
		//kiểm tra ảnh ko để hiển thị ảnh logo, phải là ảnh, ko có password hoặc ko phải thuộc format
		if( !is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')) : ?>
			<figure class="post-thumbnail">
				<?php the_post_thumbnail($size); ?>
			</figure>
		<?php endif; ?>
	<?php }
}

//cho phép lấy characters hiển thị ra màn hình
add_filter('pre_get_posts','lay_custom_post_type');
function lay_custom_post_type($query) {
  if (is_home() && $query->is_main_query ())
    $query->set ('post_type', array ('post','Characters'));
    return $query;
}

// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'taxonomy', array( 'post' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

/*
	================ Nhúng file style.css ================
*/
function jack_style() {


	wp_register_script('jquery.min-script', get_template_directory_uri() . "/jquery.min.js", array('jquery'));
	wp_enqueue_script('jquery.min-script');
	wp_register_script('jquery-ui.min-script', get_template_directory_uri() . "/jquery-ui.min.js", array('jquery'));
	wp_enqueue_script('jquery-ui.min-script');
	// wp_register_style('superfish-style', get_template_directory_uri() . "/superfish.css", 'all');
	// wp_enqueue_style('superfish-style');

	wp_register_script('slick-style', "https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css", 'all');
	wp_enqueue_script('slick-style');
	wp_register_script('slick-theme-style', "https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css", 'all');
	wp_enqueue_script('slick-theme-style');
	wp_register_script('slick.min-script', "https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js", array('jquery'));
	wp_enqueue_script('slick.min-script');

	wp_register_style('fonts-style', get_template_directory_uri() . "/fonts.css", 'all');
	wp_enqueue_style('fonts-style');
	wp_register_style('main-style', get_template_directory_uri() . "/style.css", 'all');
	wp_enqueue_style('main-style');
	// wp_register_style('reset-style', get_template_directory_uri() . "/reset.css", 'all');
	// wp_enqueue_style('reset-style');
	wp_register_style('responsive-style', get_template_directory_uri() . "/responsive.css", 'all');
	wp_enqueue_style('responsive-style');
	wp_register_script('jquery-script', get_template_directory_uri() . "/jquery.js", array('jquery'));
	wp_enqueue_script('jquery-script');
	
}
add_action('wp_enqueue_scripts', 'jack_style');

//add_theme_support('nav-menus');

 function jack_characters() { ?>
 	<style type="text/css" media="screen">
 		#character{
 			background-image: url(<?php echo plugins_url('wrapper3.png' ); ?>); 
 		} 
	</style>
 <?php }
 add_action('wp_enqueue_scripts', 'jack_characters');


// Action Hook 
 // pre_get_post

 function jack_get_posts( $query) {
 	if( $query -> is_home() && $query -> is_main_query())
 		$query -> set('orderby', 'rand');
 }
add_action("pre_get_posts", 'jack_get_posts');

//Set the Post Custom Field in the WP dashboard as Name/Value pair
function bac_PostViews($post_ID) {
 
//Set the name of the Posts Custom Field.
$count_key = 'post_views_count';
 
//Returns values of the custom field with the specified key from the specified post.
$count = get_post_meta($post_ID, $count_key, true);
 
//If the the Post Custom Field value is empty.
if($count == ''){
$count = 0; // set the counter to zero.
 
//Delete all custom fields with the specified key from the specified post.
delete_post_meta($post_ID, $count_key);
 
//Add a custom (meta) field (Name/value)to the specified post.
add_post_meta($post_ID, $count_key, '0');
return $count . ' View';
 
//If the the Post Custom Field value is NOT empty.
}else{
$count++; //increment the counter by 1.
//Update the value of an existing meta key (custom field) for the specified post.
update_post_meta($post_ID, $count_key, $count);
 
//If statement, is just to have the singular form 'View' for the value '1'
if($count == '1'){
return $count . ' View';
}
//In all other cases return (count) Views
else {
return $count . ' Views';
}
}
}
