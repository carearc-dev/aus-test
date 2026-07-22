<?php
// **********************************************
// 管理画面に関する設定を記述
// **********************************************

// ==============================================
// 管理画面で読み込むcss・jsファイル
// ==============================================
function add_admin_script()
{
	// ===CSS===
	wp_enqueue_style(
		' style-admin',
		get_template_directory_uri() . '/_assets/admin/admin.css',
		array(),
		filemtime(get_theme_file_path('/_assets/admin/admin.css')) //バージョン名
	);
	// ===JS===
	wp_enqueue_script(
		'admin_js',
		get_template_directory_uri() . '/_assets/admin/admin.js',
		array('jquery'),
		filemtime(get_theme_file_path('/_assets/admin/admin.js')), //バージョン
		true //body終了タグの前で読み込み
	);
}
add_action('admin_enqueue_scripts', 'add_admin_script');

// ==============================================
//WordPress本体の自動更新を無効化
// ==============================================
add_filter('automatic_updater_disabled', '__return_true');

// ==============================================
//管理画面 一覧ページ 表示項目
// ==============================================
function admin_post_time($h_time, $post)
{
	$date = get_the_date('Y/n/j');
	$day = get_post_time('l', false, $post);
	$table = array(
		'Monday' => '月',
		'Tuesday' => '火',
		'Wednesday' => '水',
		'Thursday' => '木',
		'Friday' => '金',
		'Saturday' => '土',
		'Sunday' => '日',
	);
	$search = array_keys($table);
	$replace = array_values($table);
	$day = str_replace($search, $replace, $day);
	$day = '<span class="fs1S">（' . $day . '）</span>';
	$time = get_post_time('H:i', false, $post);
	$time = "";
	return $date . $day . ' ' . $time;
}
add_filter('post_date_column_time', 'admin_post_time', 10, 2);

// ==============================================
// 管理画面 固定ページ 表示項目
// ==============================================
function st_add_posts_columns_page($columns)
{
	$columns['col_page_order'] = '順序';
	$columns['col_page_status'] = 'ステータス';
	// $columns['col_page_type'] = '種別';
	$columns['col_page_slug'] = 'スラッグ';
	$columns['col_page_url'] = 'URL';
	$columns['col_page_template'] = 'テンプレート';
	unset($columns['comments']);
	unset($columns['date']);
	unset($columns['author']);
	echo '
	<style type="text/css">
	.wp-list-table .column-title {width: auto !important;}
	.wp-list-table .column-date {width: 120px;}
	.wp-list-table #col_page_order {width: 30px;}
	.wp-list-table #col_page_status {width: 60px;}
	.wp-list-table #col_page_slug {width: 150px;}
	.wp-list-table #col_page_url {width: 200px;}
	.wp-list-table #col_page_template {width: 100px;}
	</style>
	';
	return $columns;
}
function st_add_posts_columns_row_page($column_name, $post_id)
{
	if ('col_page_status' == $column_name) {
		$status = get_post_status($post_id);
		if ($status == "private") {
			$status = '<p class="wpPrivate1 gray1">非公開</p>';
		} else if ($status == "draft") {
			$status = '<p class="wpPrivate1">下書き</p>';
		} else  if ($status == "publish") {
			$status = '<p class="wpPublish1">公開中</p>';
		} else {
			$status = '<p class="op08 fsS">' . $status . '</p>';
		}
		echo $status;
	}
	if ('col_page_slug' == $column_name) {
		$slug = get_post($post_id)->post_name;
		$limit = 30;
		if (mb_strlen($slug) > $limit) {
			$slug = mb_substr($slug, 0, $limit, 'UTF-8') . '…';
		}
		echo '<p class="fsS">' . $slug . '</p>';
	}
	if ('col_page_order' == $column_name) {
		$x = get_post($post_id)->menu_order;
		echo $x;
	}

	if ('col_page_url' == $column_name) {
		$url = get_permalink($post_id);
		$url = str_replace((empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"], "", $url);
		echo '<p class="fs2S lh13 fw3"><a href="' . $url . '" target="_blank">' . $url . '<i class="fs3S icon icon-arrow_010-01"></i></a></p>';
	}
	if ('col_page_template' == $column_name) {
		$template = 'Default';
		$templates = get_page_templates();
		$template_slug = get_page_template_slug($post_id);
		foreach ($templates as $name => $file) {
			if ($file == $template_slug) {
				$template = $name;
			}
		}
		echo '<p class="fs2S">' . $template . '</p>';
	}
}
add_filter('manage_edit-page_columns', 'st_add_posts_columns_page');
add_action('manage_page_posts_custom_column', 'st_add_posts_columns_row_page', 10, 2);

// =====================================================
// h1テキストをロゴに差し替え
// =====================================================
function my_replace_h1_with_logo()
{
	echo '<script>
		window.addEventListener("DOMContentLoaded", () => {
			const siteName = document.querySelector("body.index-php #wp-admin-bar-site-name .ab-item");
			if (siteName) {
				const h1 = document.querySelector("h1");
				const domainUrl = window.location.origin;
				const logoImg = document.createElement("img");
				logoImg.src = `' . get_template_directory_uri() . '/_assets/img/common/logo.png`;
				logoImg.style.marginTop = "20px";
				logoImg.style.width = "130px";
				h1.innerHTML = "";
				h1.appendChild(logoImg);
			}
		});
	</script>';
}
add_action('admin_head', 'my_replace_h1_with_logo');
