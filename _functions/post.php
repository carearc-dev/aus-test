<?php
// **********************************************
// 投稿に関する設定を記述
// **********************************************

// ==============================================
//一覧ページの表示（件数etc）設定
// ==============================================
function my_pre_get_posts($query)
{
	// 管理画面・メインクエリ以外には設定しない
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	// ▼hogehoge
	/*
	if($query -> is_post_type_archive('hoge')){
		$query -> set('posts_per_page',-1); //-1は表示数制限なし
		$query->set( 'order', 'DESC' ); //降順
		$query->set( 'orderby', 'post_date' ); //投稿日順
	}
	*/
	// ▼新着情報
	if ($query->is_post_type_archive('news')) {
		$query->set('posts_per_page', 5); //-1は表示数制限なし
		$query->set('order', 'DESC'); //降順
		$query->set('orderby', 'post_date'); //投稿日順
	}
}
add_action('pre_get_posts', 'my_pre_get_posts');

// ==============================================
//br、pタグ 記事表示時の整形無効
// ==============================================
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');
remove_filter('acf_the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
add_action(
	'wp_head',
	function () {
		remove_filter('the_content', 'wpautop');
		remove_filter('the_excerpt', 'wpautop');
		remove_filter('acf_the_content', 'wpautop');
	}
);
add_filter(
	'tiny_mce_before_init',
	function ($init_array) {
		global $allowedposttags;
		$init_array['valid_elements']          = '*[*]';
		$init_array['extended_valid_elements'] = '*[*]';
		$init_array['valid_children']          = '+a[' . implode('|', array_keys($allowedposttags)) . ']';
		$init_array['indent']                  = true;
		$init_array['wpautop']                 = false;
		$init_array['force_p_newlines']        = false;
		return $init_array;
	}
);
function shortcode_empty_paragraph_fix($content)
{
	$array = array(
		'<p>[' => '[',
		']</p>' => ']',
		']<br />' => ']'
	);

	$content = strtr($content, $array);
	return $content;
}
add_filter('the_content', 'shortcode_empty_paragraph_fix');

// ==============================================
//　投稿編集画面 項目非表示
// ==============================================
function my_remove_classic_meta_boxes()
{
	//▼「hoge」編集画面
	//カテゴリー
	// remove_meta_box('tagsdiv-hoge', 'voice', 'normal');
	//タグ
	// remove_meta_box('tagsdiv-fuga', 'voice', 'normal');
}
add_action('admin_menu', 'my_remove_classic_meta_boxes');

// ==============================================
//
// ==============================================
