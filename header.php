<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/_assets/img/common/favicon.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/_assets/img/common/favicon.png">
	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
	<!-- /Google fonts -->
	<!-- Adobe fonts -->
	<link rel="stylesheet" href="https://use.typekit.net/kbo8gnh.css">
	<!-- /Adobe fonts -->
	<?php get_template_part('_template/header/head'); ?>
	<!-- wp_head -->
	<?php wp_head(); ?>
	<!-- /wp_head -->
	<?php get_template_part('_template/embed-tag/before-close-head'); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('_template/embed-tag/after-start-body'); ?>
	<?php get_template_part('_template/parts/admin-edit-btn'); ?>

	<?php if (is_page(array('sharedse', 'infinityplayblocks', 'harmonysase', 'trustbuild', 'deeptrace', 'activedefense'))) : ?>
		<?php /* サービスページの場合は通常用ヘッダーは読み込まない */ ?>
	<?php else: ?>
		<?php get_template_part('_template/header/header-pc'); ?>
		<?php get_template_part('_template/header/header-sp'); ?>
	<?php endif; ?>
