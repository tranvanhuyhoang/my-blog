<?php 
    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Menu chính' ));
        add_theme_support( 'post-thumbnails' );

        function setpostview($postID){
          $count_key ='views';
          $count = get_post_meta($postID, $count_key, true);
          if($count == ''){
              $count = 0;
              delete_post_meta($postID, $count_key);
              add_post_meta($postID, $count_key, '0');
          } else {
              $count++;
              update_post_meta($postID, $count_key, $count);
          }
        }
        
        function getpostviews($postID){
            $count_key ='views';
            $count = get_post_meta($postID, $count_key, true);
            if($count == ''){
                delete_post_meta($postID, $count_key);
                add_post_meta($postID, $count_key, '0');
                return "0";
            }
            return $count;
        }  
    }
    add_action( 'init', 'register_my_menu' );

    function wpdocs_custom_excerpt_length( $length ) {
        return 17;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>