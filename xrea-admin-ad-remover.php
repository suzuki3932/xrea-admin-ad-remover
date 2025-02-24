<?php
/*
Plugin Name: XREA Admin AD Remover
Description: Delete the ad from the admin page. *Do not delete from the front end.
Version: 1.0
Requires PHP: 7.4
Requires at least: 5.0
Author: Suzuki Tomomi
Author URI: https://youmutec394.f5.si
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

function remove() {
	echo '<!--nobanner-->';
}
add_action( 'admin_head', 'remove' );
