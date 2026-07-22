<?php
// **********************************************
// javaScriptファイルの読み込み
// **********************************************

// **********************************************
// template
// **********************************************
// テーマファイルから読み込む場合
// wp_enqueue_script(
// 	'script-hoge', //任意のハンドル名
// 	get_template_directory_uri() . '/_assets/js/script.css', //読み込むcssのパス
// 	array(), //依存関係のあるハンドル名
// 	'yyyymmdd', //バージョン名
//   filemtime(get_theme_file_path('/_assets/js/script.css')) //バージョン名
// 	true //body終了タグの前で読み込み
// );
// **********************************************
// CDN等外部ファイルを読み込む場合
// wp_enqueue_script(
// 	'script-hoge', //任意のハンドル名
// 	'https://hoge_fuga.com', //CDNで読み込む外部ファイルのURL
// 	array(), //依存関係のあるハンドル名
// 	'', //バージョン名
// 	true //body終了タグの前で読み込み
// );
// **********************************************

// ==============================================
// jqueryの読み込み
// ==============================================
function no_jquery()
{
	// WordPress本体のjquery.jsを読み込まない
	// wp_deregister_script('jquery');
	// jQueryの読み込み
	// wp_enqueue_script('my_jquery', get_template_directory_uri() . '/_assets/js/jquery.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'no_jquery');

// ==============================================
// javascriptファイルの読み込み
// ==============================================
function add_javascript()
{
	wp_enqueue_script(
		'script-splide',
		get_template_directory_uri() . '/_assets/lib/splide.min.js',
		array(),
		filemtime(get_theme_file_path('/_assets/lib/splide.min.js')), //バージョン
		true
	);
	wp_enqueue_script(
		'script-splide-auto-scroll',
		get_template_directory_uri() . '/_assets/lib/splide-extension-auto-scroll.min.js',
		array(),
		filemtime(get_theme_file_path('/_assets/lib/splide-extension-auto-scroll.min.js')), //バージョン
		true
	);
	wp_enqueue_script(
		'script-gsap',
		get_template_directory_uri() . '/_assets/lib/gsap.min.js',
		array(),
		filemtime(get_theme_file_path('/_assets/lib/gsap.min.js')), //バージョン
		true
	);
	wp_enqueue_script(
		'script-gsap-scroll-trigger',
		get_template_directory_uri() . '/_assets/lib/ScrollTrigger.min.js',
		array(),
		filemtime(get_theme_file_path('/_assets/lib/ScrollTrigger.min.js')), //バージョン
		true
	);
	wp_enqueue_script(
		'script-aos',
		get_template_directory_uri() . '/_assets/lib/aos.js',
		array(),
		filemtime(get_theme_file_path('/_assets/lib/aos.js')), //バージョン
		true
	);
	wp_enqueue_script(
		'script-js',
		get_template_directory_uri() . '/_assets/js/script.js',
		array(),
		filemtime(get_theme_file_path('/_assets/js/script.js')), //バージョン
		true
	);
}
add_action('wp_enqueue_scripts', 'add_javascript');
