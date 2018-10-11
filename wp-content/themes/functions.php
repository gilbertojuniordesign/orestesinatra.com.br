<?php 
// ocultar barra admin
add_filter('show_admin_bar', '__return_false');

// tema
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );

// título específico para página
/** wp_title
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
function wpdocs_theme_name_wp_title( $title, $sep ) {
    if ( is_feed() ) {
        return $title;
    }
     
    global $page, $paged;
 
    // Add the blog name
    $title .=  " $sep " . get_bloginfo( 'name', 'display' );
    return $title;
}
add_filter( 'wp_title', 'wpdocs_theme_name_wp_title', 10, 2 );

// menus
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(
array(
'menu-top' => ( 'Menu Top' ),
)
);
}
add_action( 'init', 'register_my_menus' );


function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );
	

// post > limidador de caractere
function the_excerpt_max_charlength($charlength) {
   $excerpt = get_the_excerpt();
   $charlength++;
   if(strlen($excerpt)>$charlength) {
	   $subex = substr($excerpt,0,$charlength-5);
	   $exwords = explode(" ",$subex);
	   $excut = -(strlen($exwords[count($exwords)-1]));
	   if($excut<0) {
			echo substr($subex,0,$excut);
	   } else {
			echo $subex;
	   }
	   echo "[...]";
   } else {
	   echo $excerpt;
   }
}

// post > mescla custom post type (eventos) e posts normais na home
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
                if ( is_home() && $query->is_main_query() )
                                        $query->set( 'post_type', array( 'post', 'event' ) );
                        return $query;
}

 
?>