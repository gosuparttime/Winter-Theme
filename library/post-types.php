<?php



// Homepage Options Dashboard Menu
//$file_url = get_bloginfo('template_directory').'/library/images/custom-post-icon.png';

// New Stories For Site
add_action( 'init', 'create_new_courses' );
function create_new_courses() {
	// Add Modules
	$labels = array(
		'name' => 'Courses',
		 'singular_name' => 'Course',
		 'menu_name' => 'Courses',
		 'add_new' => 'Add Course',
		 'add_new_item' => 'Add New Course',
		 'edit' => 'Edit',
		 'edit_item' => 'Edit Course',
		 'new_item' => 'New Course',
		 'view' => 'View Course',
		 'view_item' => 'View Course',
		 'search_items' => 'Search Courses',
		 'not_found' => 'No Courses Found',
		 'not_found_in_trash' => 'No Courses Found in Trash',
		 'parent' => 'Parent Course'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Create new Courses for Winterlude.',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'page',
		'map_meta_cap' => true,
		'hierarchical' => true,
		'rewrite' => array('slug' => 'courses'),
		'query_var' => true,
		'exclude_from_search' => true,
		'menu_position' => 36,
		'menu_icon' => get_bloginfo('template_directory') . '/library/images/custom-post-icon.png',  // Icon Path
		'supports' => array('title', 'editor', 'page-attributes'),
	);
	register_post_type('course', $args);
};
// FAQs
add_action( 'init', 'create_new_faq' );
function create_new_faq() {
	// Add Student Types
	$labels = array(
		'name' => 'FAQs',
		 'singular_name' => 'FAQ',
		 'menu_name' => 'FAQs',
		 'add_new' => 'Add FAQ',
		 'add_new_item' => 'Add New FAQ',
		 'edit' => 'Edit',
		 'edit_item' => 'Edit FAQ',
		 'new_item' => 'New FAQ',
		 'view' => 'View FAQ',
		 'view_item' => 'View FAQ',
		 'search_items' => 'Search FAQs',
		 'not_found' => 'No FAQs Found',
		 'not_found_in_trash' => 'No FAQs Found in Trash',
		 'parent' => 'Parent FAQ'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Create new FAQ items for SummerStart.',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'page',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'faq'),
		'query_var' => true,
		'exclude_from_search' => true,
		'menu_position' => 34,
		'menu_icon' => get_bloginfo('template_directory') . '/library/images/custom-post-icon.png',  // Icon Path
		'supports' => array('title', 'editor'),
	);
	register_post_type('faq', $args);
};

// Register Custom Taxonomy
// Add Content Tagging
function add_study_tags()  {

	$labels = array(
		'name'                       => _x( 'Course Keywords', 'Taxonomy General Name', 'winterlude-theme' ),
		'singular_name'              => _x( 'Course Keyword', 'Taxonomy Singular Name', 'winterlude-theme' ),
		'menu_name'                  => __( 'Course Keyword', 'winterlude-theme' ),
		'all_items'                  => __( 'All Course Keywords', 'winterlude-theme' ),
		'parent_item'                => __( 'Parent Course Keyword', 'winterlude-theme' ),
		'parent_item_colon'          => __( 'Parent Course Keyword:', 'winterlude-theme' ),
		'new_item_name'              => __( 'New Course Keyword', 'winterlude-theme' ),
		'add_new_item'               => __( 'Add New Course Keyword', 'winterlude-theme' ),
		'edit_item'                  => __( 'Edit Course Keyword', 'winterlude-theme' ),
		'update_item'                => __( 'Update Course Keyword', 'winterlude-theme' ),
		'separate_items_with_commas' => __( 'Separate Course keywords with commas', 'winterlude-theme' ),
		'search_items'               => __( 'Search Course Keywords', 'winterlude-theme' ),
		'add_or_remove_items'        => __( 'Add or Remove Course Keywords', 'winterlude-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used Course Keywords', 'winterlude-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'course_tags', 'course', $args );

}

//Media Gallery Custom Tax
// Register Custom Taxonomy
function media_directory()  {
	$labels = array(
		'name'                       => _x( 'Media Types', 'Taxonomy General Name', 'winterlude-theme' ),
		'singular_name'              => _x( 'Media Type', 'Taxonomy Singular Name', 'winterlude-theme' ),
		'menu_name'                  => __( 'Media Types', 'winterlude-theme' ),
		'all_items'                  => __( 'All Media Types', 'winterlude-theme' ),
		'parent_item'                => __( 'Parent Media Type', 'winterlude-theme' ),
		'parent_item_colon'          => __( 'Parent Media Type:', 'winterlude-theme' ),
		'new_item_name'              => __( 'New Media Type Name', 'winterlude-theme' ),
		'add_new_item'               => __( 'Add New Media Type', 'winterlude-theme' ),
		'edit_item'                  => __( 'Edit Media Type', 'winterlude-theme' ),
		'update_item'                => __( 'Update Media Type', 'winterlude-theme' ),
		'separate_items_with_commas' => __( 'Separate media types with commas', 'winterlude-theme' ),
		'search_items'               => __( 'Search Media Types', 'winterlude-theme' ),
		'add_or_remove_items'        => __( 'Add or remove media types', 'winterlude-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used media types', 'winterlude-theme' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);

	register_taxonomy( 'types', 'attachment', $args );
}

// Hook into the 'init' action
add_action( 'init', 'media_directory', 0 );


?>