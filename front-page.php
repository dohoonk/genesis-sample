<?php
/**
*Front page template
*
*@package   tonykim
*@author    Tony Kim
*@link      http://www.tonykim.tech/
*@license   GPL-2.0+
*/

//* Remove description from the header
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );

//* Remove the header right widget area
unregister_sidebar( 'header-right' );

//* Reposition the primary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header_right', 'genesis_do_nav', 12 );

//* Add slick-slider after header
add_action( 'genesis_after_header', 'slick_slider_home' );

function slick_slider_home() {
 echo do_shortcode('[slick-slider category="33"]');
};


// Add Second navigation after slick-slider
add_action( 'genesis_meta', 'second_menu_setup' );

function second_menu_setup() {

  $second_menu = array(
      'second_menu' => is_active_sidebar( 'second-menu' ),
      'call_to_action' => is_active_sidebar( 'call-to-action' ),
  );

  // Return early if no sidebars are active.
  if ( ! in_array( true, $second_menu) ) {
    return;
  }

  // Add second_menu if "Second Menu" widget area is active.
  if ( $second_menu['second_menu'] ) {
    add_action( 'genesis_before_content_sidebar_wrap', 'second_menu_add');
  }
}


/**
* Display content for the "Home Welcome" section.
*
*@since 1.0.0
*/
function second_menu_add() {

    genesis_widget_area( 'second-menu',
      array(
        'before' => '<div class="second-menu"><div class="wrap">',
        'after'  => '</div></div>',
      )
    );
}


//* Add second slick-slider
add_action( 'genesis_before_content', 'second_slick_slider_home' );

function second_slick_slider_home() {
 echo do_shortcode('[slick-carousel-slider category="32"]');
};


// Add Second navigation after slick-slider
add_action( 'genesis_meta', 'home_description' );

function home_description() {

  $home_description = array(
      'home_description' => is_active_sidebar( 'home-description' ),
  );

  // Return early if no sidebars are active.
  if ( ! in_array( true, $home_description) ) {
    return;
  }

  // Add Home description if "home description" widget area is active.
  if ( $home_description['home_description'] ) {
    add_action( 'genesis_before_loop', 'home_description_add');
  }
}
/**
* Display content for the "Home Welcome" section.
*
*@since 1.0.0
*/
function home_description_add() {

    genesis_widget_area( 'home-description',
      array(
        'before' => '<div class="home-description"><div class="wrap">',
        'after'  => '</div></div>',
      )
    );
}


//* Add youtube video
add_action( 'genesis_loop', 'video_home' );

function video_home() {
 echo '<iframe src="https://www.youtube.com/embed/V224RFOhyis"
   width="679" height="399" frameborder="0" allowfullscreen></iframe>';
};

// Add Widget before footer
add_action( 'genesis_meta', 'before_footer_menu' );

function before_footer_menu() {

  $before_footer_menu = array(
      'before_footer_menu' => is_active_sidebar( 'before-footer-menu' ),
  );

  // Return early if no sidebars are active.
  if ( ! in_array( true, $before_footer_menu) ) {
    return;
  }

  // Add Home description if "home description" widget area is active.
  if ( $before_footer_menu['before_footer_menu'] ) {
    add_action( 'genesis_before_footer', 'before_footer_menu_add');
  }
}
/**
* Display content for the "Home Welcome" section.
*
*@since 1.0.0
*/
function before_footer_menu_add() {

    genesis_widget_area( 'before-footer-menu',
      array(
        'before' => '<div class="before-footer-menu"><div class="wrap">',
        'after'  => '</div></div>',
      )
    );
}


genesis();
