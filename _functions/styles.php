<?php
// **********************************************
// CSSファイルの読み込み
// **********************************************

// **********************************************
// template
// **********************************************
// テーマファイルから読み込む場合
// wp_enqueue_style(
//   'style-hoge',　//任意のハンドル名
//   get_template_directory_uri() . '/_assets/css/style.css', //読み込むcssのパス
//   array(), //依存関係のあるハンドル名
//   'yyyymmdd', //バージョン名
//   filemtime(get_theme_file_path('/_assets/css/style.css')) //バージョン名
// );
// **********************************************
// CDN等外部ファイルを読み込む場合
// wp_enqueue_style(
//   'style-hoge', //任意のハンドル名
//   'https://hoge_fuga.com', //CDNで読み込む外部ファイルのURL
//   array(), //依存関係のあるハンドル名
//   'yyyymmdd', //バージョン名
// );
// **********************************************

// ==============================================
// CSSファイルの読み込み
// ==============================================
function add_stylesheet()
{
	wp_enqueue_style(
		'style-main',
		get_template_directory_uri() . '/_assets/css/style.css',
		array(),
		filemtime(get_theme_file_path('/_assets/css/style.css')), //バージョン
	);
	wp_enqueue_style(
		'gutenberg',
		get_template_directory_uri() . '/_assets/css/gutenberg.css',
		array(),
		filemtime(get_theme_file_path('/_assets/css/gutenberg.css')), //バージョン
	);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

// ==============================================
//
// ==============================================
