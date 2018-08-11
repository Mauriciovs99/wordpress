<?php function financeup_import_files() {
  return array(
    array(
      'import_file_name'           => 'Financeup',
      'import_file_url'            => get_template_directory_uri() . '/inc/ansar/import-data/financeup-wordpress.xml',
      'import_widget_file_url'     => get_template_directory_uri() . '/inc/ansar/import-data/financeup-lite-widgets.wie',
      'import_customizer_file_url' => get_template_directory_uri() . '/inc/ansar/import-data/financeup-export.dat',
      'import_notice'              => sprintf(__( 'Click on the IMPORT DEMO DATA button below to install the <a href="https://themeansar.com/demo/wp/financeup/lite/">exact demo replica of the financeup theme</a></br></br>
			To use WooCommerce or Gallery in the theme, install the plugin given below.:</br> </br><li> <a href="https://wordpress.org/plugins/contact-form-7/"> Contact form 7</a> </l1> </br> <li> <a href="https://wordpress.org/plugins/woocommerce/"> WooCommerce </a> </li><li> <a href="https://wordpress.org/plugins/tiled-gallery-carousel-without-jetpack/"> Gallery Carousel </a></li>', 'financeup' )),
			),
    	
    	
    	
	);
}
add_filter( 'pt-ocdi/import_files', 'financeup_import_files' );


function financeup_demo_import() {

	// Menus to assign after import.
	$main_menu   = get_term_by( 'name', 'primary-menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
		'primary'   => $main_menu->term_id,
	));
	
 // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );	
	
}
add_action( 'pt-ocdi/after_import', 'financeup_demo_import' );

function financeup_redirect_plugin_activation( $plugin ) {
	
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if ( is_plugin_active( 'one-click-demo-import/one-click-demo-import.php' ) ):
			$plugin_installed = get_option('financeup-plugin'); 
		if(!$plugin_installed){
				update_option('financeup-plugin','activated');
		 exit( wp_redirect( admin_url( 'themes.php?page=pt-one-click-demo-import' ) ) );
			}
	endif;
	
	
}
add_action( 'activated_plugin', 'financeup_redirect_plugin_activation' );


function financeup_redirect_plugin_deactivate() {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	$pluginList = get_option( 'active_plugins' );
$plugin = 'one-click-demo-import/one-click-demo-import.php'; 
if ( in_array( $plugin , $pluginList ) ) {
	
		delete_option('financeup-plugin');
	
}		
	
}
add_action( 'deactivated_plugin', 'financeup_redirect_plugin_deactivate');