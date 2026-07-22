<?php
if (is_user_logged_in()) :
	$post_id = get_the_id();
?>
	<?php if (is_single()) : ?>
		<a class="l-wpEditBtn" href="<?php echo admin_url(); ?>post.php?post=<?php echo $post_id; ?>&action=edit" target="_blank">投稿を<br>編集</a>
	<?php elseif (is_tax()) : ?>
		<a class="l-wpEditBtn" href="<?php echo admin_url(); ?>edit-tags.php?taxonomy=<?php echo get_queried_object()->taxonomy; ?>&action=edit" target="_blank">タームを<br>編集</a>
	<?php elseif (is_archive()) : ?>
		<a class="l-wpEditBtn" href="<?php echo admin_url(); ?>edit.php?post_type=<?php echo get_post_type(); ?>" target="_blank">一覧に<br>移動</a>
	<?php elseif (is_page()) : ?>
		<a class="l-wpEditBtn" href="<?php echo admin_url(); ?>post.php?post=<?php echo $post_id; ?>&action=edit" target="_blank">固定<br>ページ<br>を編集</a>
	<?php else : ?>
		<a class="l-wpEditBtn" href="<?php echo admin_url(); ?>" target="_blank">管理画面<br>に移動</a>
	<?php endif; ?>
	<style>
		.l-wpEditBtn {
			z-index: 9999;
			position: fixed;
			bottom: 150px;
			right: -1px;
			display: grid;
			place-items: center;
			background-color: #333;
			border: 1px solid #333;
			text-align: center;
			color: #fff;
			border-radius: 10px 0 0 10px;
			line-height: 1.4;
			font-size: 14px;
			width: 80px;
			height: 80px;
			transition: all .3s;
		}

		.l-wpEditBtn:hover {
			background-color: #fff;
			color: #333;
			opacity: 1;
		}
	</style>
<?php endif; ?>
