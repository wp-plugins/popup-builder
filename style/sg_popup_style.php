<?phpfunction sg_popup_admin_style($hook) {	if ('popup-builder_page_popups' != $hook && 'popup-builder_page_create-popup' != $hook) {        return;    }	wp_register_style('sg_popup_style', SG_APP_POPUP_URL . '/style/sg_popup_style.css', false, '1.0.0');	wp_enqueue_style('sg_popup_style');	wp_register_style('sg_popup_animate', SG_APP_POPUP_URL . '/style/animate.css');	wp_enqueue_style('sg_popup_animate');	wp_register_style('sg_popup_rangeslider', SG_APP_POPUP_URL . '/style/sg_popup_rangeslider.css');	wp_enqueue_style('sg_popup_rangeslider');   }add_action('admin_enqueue_scripts', 'sg_popup_admin_style');function sg_popup_style($hook) {	if ($hook != 'post.php') {		return;	}	wp_register_style('sg_popup_animate', SG_APP_POPUP_URL . '/style/animate.css');	wp_enqueue_style('sg_popup_animate');	wp_register_style('sg_popup_style', SG_APP_POPUP_URL . '/style/sg_popup_style.css', false, '1.0.0');	wp_enqueue_style('sg_popup_style');}add_action('admin_enqueue_scripts', 'sg_popup_style');