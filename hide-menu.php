<?php

/*
 * Plugin Name: Hide Menu
 * Plugin URI: http://pothi.info
 * Author: Pothi Kalimuthu
 * Author URI: http://pothi.info
 * Description: Hides unneccessary menu item/s
 * Version: 1.0
 * License: Apache 2.0
 */

function tiny_remove_menus() {
    // Hide Ewww image optimizer settings that are found in two places
    $page = remove_submenu_page( 'options-general.php', 'ewww-image-optimizer/ewww-image-optimizer.php' );
    $page = remove_submenu_page( 'tools.php', 'ewww-image-optimizer-aux-images' );
}
add_action( 'admin_menu', 'tiny_remove_menus', 999 );