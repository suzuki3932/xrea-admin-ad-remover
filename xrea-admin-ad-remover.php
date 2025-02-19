<?php
/*
Plugin Name: XREA Admin AD Remover
Description: 管理画面から広告を削除します。※フロントエンドからは削除しません
Version: 1.0
Author: 鈴木知美
*/

function remove() {
	echo '<!--nobanner-->';
}
add_action( 'admin_head', 'remove' );