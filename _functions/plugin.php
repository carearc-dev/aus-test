<?php
// **********************************************
// プラグインに関連する個別設定
// **********************************************

// ==============================================
// Really Simple CSV Importer
// ==============================================
// チェックボックスの値を読み込み
function really_simple_csv_importer_meta_filter_checkbox($meta, $post, $is_update)
{
	foreach ($meta as $key => $value) {
		if (strpos($value, ',') !== false) {
			$_value = preg_split("/,+/", $value);
			$meta[$key] = $_value;
		}
	}
	return $meta;
}
add_filter('really_simple_csv_importer_save_meta', 'really_simple_csv_importer_meta_filter_checkbox', 5, 3);

// ==============================================
////CONTACT FORM 7
// ==============================================
// Contact Form 7の自動pタグ無効化
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
	return false;
}

// ==============================================
//. BreadCrumb
//==============================================
function bcn_add($bcnObj)
{
	// デフォルト投稿の詳細ページかどうか
	if (is_singular('news')) {
		// 新規のtrailオブジェクトを末尾に追加する
		$bcnObj->add(new bcn_breadcrumb('News', null, array('post-clumn-archive'), home_url('/news'), null, true));
		$trail_tmp = clone $bcnObj->trail[2];
		$bcnObj->trail[2] = clone $bcnObj->trail[1];
		$bcnObj->trail[1] = $trail_tmp;
	}
	return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');
