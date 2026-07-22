<?php
// **********************************************
// ショートコードに関連する設定
// **********************************************

// ==============================================
// 固定ページでのテーマディレクトリまでの画像パス
// ==============================================
function imgPathcode()
{
	return get_template_directory_uri();
}
add_shortcode('imgPath', 'imgPathcode');

// ★使い方★
// ▼挿入ショートコード
// [imgPath]
// ▼出力されるコード
// <img src="[imgPath]/_pack/img/画像名" alt="">

// ショートコードの仕様制限要素(srcset)に対応の為
add_filter('wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2);
function my_wp_kses_allowed_html($tags, $context)
{
	$tags['source']['srcset'] = true;
	$tags['img']['srcset'] = true;
	return $tags;
}

// ==============================================
// BreadCrumb NavXT 導入タグ
// ==============================================
if (!function_exists('breadCrumbNav')) {
	function breadCrumbNav()
	{
		$html = '<div class="breadcrumb container">' . bcn_display(true) . '</div>';
		return $html;
	}
	add_shortcode('breadCrumbNav', 'breadCrumbNav');
}

// ▼固定ページ
// [breadCrumbNav]
// ▼テンプレートファイル内(phpタグ必要)
// echo do_shortcode('[breadCrumbNav]');

// ==============================================
// 固定ページでテンプレートパーツを呼び出す
// ==============================================
add_shortcode('add_part', function ($attr) {
	ob_start();
	get_template_part($attr['temp']);
	return ob_get_clean();
});
// ★使い方★
// ▼下記のショートコードを挿入
// [add_part temp='_template/呼び出したいファイル名']
// ▼出力されるコード
//  get_template_part("template/hoge")
