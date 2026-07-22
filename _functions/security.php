<?php
// ========================================
// WordPress使用痕跡の隠蔽・セキュリティ設定
// ========================================

// 1. WPバージョンをheadから除去
remove_action('wp_head', 'wp_generator');

// 2. RSSフィードのバージョン除去
add_filter('the_generator', '__return_empty_string');

// 3. wp-embed.min.jsの読み込み停止
add_action('wp_footer', function() {
    wp_deregister_script('wp-embed');
});

// 4. REST API のバージョン情報をheadから除去
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');

// 5. wlwmanifest（Windows Live Writer）リンク除去
remove_action('wp_head', 'wlwmanifest_link');

// 6. RSDリンク除去
remove_action('wp_head', 'rsd_link');