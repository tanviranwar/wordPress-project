<?php
function moderna_menue(){
	register_nav_menus(array(
		'main_menu' => 'Main Menu'
		));
	register_nav_menus(array(
		'footer_menu' => 'Footer Menu'
		));
}
add_action('init', 'moderna_menue');

function moderna_fallback_menu(){
	echo "<ul class='nav navbar-nav'>";
	if ('page' != get_option('show_on_front')){
		echo "<li><a href=''.site_url().'/'>Home</a></li>";
	}
wp_list_pages('title_li=');
echo "</ul>";
}


/*
function register_sidebars( $number = 1, $args = array() ) {
        global $wp_registered_sidebars;
        $number = (int) $number;

        if ( is_string($args) )
              parse_str($args, $args);

       for ( $i = 1; $i <= $number; $i++ ) {
               $_args = $args;

                if ( $number > 1 )
                        $_args['name'] = isset($args['name']) ? sprintf($args['name'], $i) : sprintf(__('Sidebar %d'), $i);
                else
                        $_args['name'] = isset($args['name']) ? $args['name'] : __('Sidebar');

               // Custom specified ID's are suffixed if they exist already.
              // Automatically generated sidebar names need to be suffixed regardless starting at -0
                if ( isset($args['id']) ) {
                        $_args['id'] = $args['id'];
                        $n = 2; // Start at -2 for conflicting custom ID's
                       while ( is_registered_sidebar( $_args['id'] ) ) {
                               $_args['id'] = $args['id'] . '-' . $n++;
                        }
                } else {
                        $n = count( $wp_registered_sidebars );
                        do {
                                $_args['id'] = 'sidebar-' . ++$n;
	                        } while ( is_registered_sidebar( $_args['id'] ) );
                }
                register_sidebar($_args);
	        }
	}
*/




 ?>