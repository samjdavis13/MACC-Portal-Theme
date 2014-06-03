<?php 

// Enable custom menus
add_theme_support( 'menus' );

// Hide admin abr
show_admin_bar(false);

// Widgetize Areas
register_sidebar(array(
	'name'=> 'Right Sidebar',
	'id' => 'right_sidebar',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));

?>