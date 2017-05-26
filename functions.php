<?php
function remove_admin_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_header');

function search_filter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}

add_filter('pre_get_posts','search_filter');

add_filter('show_admin_bar', '__return_false');
