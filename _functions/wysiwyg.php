<?php
// **********************************************
// ビジュアルエディタ・wysiwygに関する設定を記述
// **********************************************

// ==============================================
// ビジュアルエディタの設定
// ==============================================
// 見出し設定
add_filter('tiny_mce_before_init', 'custom_tiny_mce_formats');
function custom_tiny_mce_formats($settings)
{
	global $post_type;
	if ($post_type == 'xxx') {
		$settings['block_formats'] = '見出し1（h2）=h2;見出し2（h3）=h3;見出し3（h4）=h4;本文（p）=p;';
	} else {
		$settings['block_formats'] = '見出し1（h2）=h2;見出し2（h3）=h3;見出し3（h4）=h4;本文（p）=p;';
	}
	return $settings;
}

// フォントサイズ
add_filter('tiny_mce_before_init', function ($settings) {
	$settings['fontsize_formats'] = '10px 12px 14px 16px 18px 20px 24px 28px 32px 36px 42px 48px';
	return $settings;
});
add_filter('mce_buttons', function ($buttons) {
	array_push($buttons, 'fontsizeselect');
	return $buttons;
});

// フォント変更
add_editor_style('editor-style.css');
function custom_editor_settings($initArray)
{
	$initArray['body_class'] = 'editor-area';
	return $initArray;
}
add_filter('tiny_mce_before_init', 'custom_editor_settings');


// スタイル
function custom_tiny_mce_style_formats($settings)
{
	$style_formats = array(
		array(
			'title' => 'ボタンA',
			'inline' => 'a',
			'classes' => 'c-btn-primary',
			'wrapper' => false,
		),
		array(
			'title' => 'ボタンB',
			'inline' => 'a',
			'classes' => 'c-btn-secondary',
			'wrapper' => false,
		),
	);
	$settings['style_formats'] = json_encode($style_formats);
	return $settings;
}
add_filter('tiny_mce_before_init', 'custom_tiny_mce_style_formats');

function add_original_styles_button($buttons)
{
	array_splice($buttons, 1, 0, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons', 'add_original_styles_button');

// ==============================================
//
// ==============================================

// ==============================================
//
// ==============================================
