<?php
/**
 * Custom Child functions
 */

/* Gets rid of the link manager on the dashboard. Who uses this anymore?!? */
function remove_menus(){
  remove_menu_page( 'link-manager.php' );        //Link Menu
}
add_action( 'admin_menu', 'remove_menus' );