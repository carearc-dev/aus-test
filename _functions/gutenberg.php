<?php
// **********************************************
// Gutenbergに関する設定を記述
// **********************************************

// ==============================================
// エディターCSS
//==============================================
function my_block_editor_style_setup()
{
	// エディタにスタイルを適用
	add_editor_style('_assets/css/destyle.css');
	add_editor_style('_assets/css/gutenberg.css');

	add_theme_support('editor-styles');
};
add_action('after_setup_theme', "my_block_editor_style_setup");

//==============================================
// パターンディレクトリを無効化
//==============================================
add_filter('should_load_remote_block_patterns', '__return_false');

//==============================================
// ブロックディレクトリを無効化
//==============================================
remove_action('enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets');

//==============================================
// Openverseを無効化
//==============================================
function example_disable_openverse($settings, $context)
{
	$settings['enableOpenverseMediaCategory'] = false;
	return $settings;
}
add_filter('block_editor_settings_all', 'example_disable_openverse', 10, 2);

// ==============================================
// 使用する見出しを設定
//==============================================

function modify_heading_levels_globally($args, $block_type)
{

	if ('core/heading' !== $block_type) {
		return $args;
	}

	// H1を削除
	$args['attributes']['levelOptions']['default'] = [2, 3, 4];

	return $args;
}
add_filter('register_block_type_args', 'modify_heading_levels_globally', 10, 2);
