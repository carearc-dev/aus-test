<?php
// **********************************************
// 基本設定を記述
// **********************************************

// ==============================================
// サイト表示時の上部ツールバー非表示
// ==============================================
add_filter('show_admin_bar', '__return_false');

// ==============================================
// <head>タグ内 不要分削除
// ==============================================
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_pn_style_style_codes');
remove_action('wp_print_styles', 'wp_pn_style_deregister_styles', 100);
remove_action('wp_enqueue_scripts', array(__CLASS__, 'stylesheets'));
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rel_canonical');
function my_delete_plugin_files()
{
	wp_dequeue_style('wp-pagenavi');
}
add_action('wp_enqueue_scripts', 'my_delete_plugin_files');

function remove_recent_comments_style()
{
	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');
function register_javascript()
{
	wp_deregister_script('wp-embed');
	wp_deregister_script('comment-reply');
}
add_action('wp_enqueue_scripts', 'register_javascript');

// <head>タグ内 css削除
function dequeue_plugins_style1()
{
	wp_dequeue_style('twentynineteen-style');
	wp_dequeue_style('twentynineteen-print-style');
}
add_action('wp_enqueue_scripts', 'dequeue_plugins_style1', 9999);

// ==============================================
// バージョンアップ通知を非表示
// ==============================================
function update_nag_hide()
{
	remove_action('admin_notices', 'update_nag', 3);
}
add_action('admin_init', 'update_nag_hide');

// ==============================================
// 自動バージョンアップ停止
// ==============================================
add_filter('auto_update_theme', '__return_false');

// ==============================================
// 自動設定されるファビコンを削除
// ==============================================
function wp_favicon_delete()
{
	exit;
}
add_action("do_faviconico", "wp_favicon_delete");

// ==============================================
// 自動補完リダイレクトを無効化
// ==============================================
function disable_auto_complete_redirect($redirect_url)
{
	if (is_404()) return false;
	return $redirect_url;
}
add_filter('redirect_canonical', 'disable_auto_complete_redirect');
