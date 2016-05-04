<?php
// include_once ('include/remove-dashboard-items.php');
/**
 * Setup Images Size
 */
function agilsun_imagesize() {
    add_theme_support('post-thumbnails'); // dich vu size thumbnail
    add_image_size('img-feature', 868, 449, true);
     add_image_size('img-newspost', 262, 150, true);
}

add_action('after_setup_theme', 'agilsun_imagesize');


/**
 * Menu Locations
 */

// define menu
 if(function_exists('wp_nav_menu')){
  function agilsun_wp_my_menus(){
   register_nav_menus(array(
    'main_nav' => __('Main navigation menu')
    ));
  }
  add_action('init','agilsun_wp_my_menus');
 }

 function get_main_menu(){
  wp_nav_menu(array(
   'theme_location'  => 'main_nav',
   'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => '',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '%3$s',
            'depth'           => 0,
            'walker'          => ''
            ));
 }

 add_shortcode('main_menu', 'get_main_menu');
	
function get_sub_menu() {
     wp_nav_menu( array(
                    'theme_location'  => 'sub_menu',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => '',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => ''
                    ));
}

add_shortcode( 'sub_menu' , 'get_sub_menu' );


/**
 * Register Language Chooser
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Language Chooser', 'www.sgworldtravel.com'),
        'id' => 'language-chooser',
        'description' => 'Language Chooser',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
/**
 * Register Sales Sidebar
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Sale Sidebar', 'www.sgworldtravel.com'),
        'id' => 'sale-sidebar',
        'description' => 'Vui lòng nhập hình 300x193',
        'before_widget' => '<div class="item">',
        'after_widget' => '</div>'
    ));
}

/**
 * Register send mail letter
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Send Mail Letter', 'www.sgworldtravel.com'),
        'id' => 'send-mail-letter',
        // 'description' => 'Vui lòng nhập hình 300x193',
        // 'before_widget' => '<div class="item">',
        // 'after_widget' => '</div>'
    ));
}

/*new paging*/
function page_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link($paged - 1) ), '<' );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link($paged + 1) ), '>' );
 
    echo '</ul></div>' . "\n";
 
}
/*end new paging*/
/**
 * Pagination
 */
function pagination($pages = '', $range = 4) {
	$showitems = ($range * 2) + 1;

	global $paged;

	if(empty($paged)) $paged = 1;

	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			 $pages = 1;
		}
	}

	if(1 != $pages) {
		echo '<li class="news-page-split-page">';

		echo '<span>';

		if ($paged > 1) {
			echo '<a href="' . get_pagenum_link($paged - 1) . '" class="news-page-arowleft"> &lsaquo; </a>';
		}

		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
				echo ($paged == $i) ? '<a href="' . get_pagenum_link($i) . '" class="active">' . $i . '</a>' : '<a href="' . get_pagenum_link($i) . '">' . $i . '</a>';
			}
		}

		if ($paged < $pages) {
			echo '<a href="' . get_pagenum_link($paged + 1) . '" class="news-page-arowright"> &rsaquo; </a>';
		}

		echo '</span>';

		echo "</li>\n";
	 }
}

function agilsun_excerptlength_cat($length) {
    return 45;
}

/**
 * Excerpt more...
 */
function agilsun_excerptmore($more) {
    return '...';
}

/**
 * Excerpt no more
 */
function agilsun_excerptnomore($more) {
    return '';
}

/**
 * Excerpt length
 */
function agilsun_excerpt($length_callback = '', $more_callback = '') {
     global $post;
     
     if(function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
     }
     
     if(function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
     }
     
     $output = get_the_excerpt();
     $output = apply_filters('wptexturize', $output);
     $output = apply_filters('convert_chars', $output);
     
     echo $output;
}
?>