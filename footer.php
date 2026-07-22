<?php if (is_page(array('sharedse', 'infinityplayblocks', 'harmonysase', 'trustbuild', 'deeptrace', 'activedefense'))) : ?>
	<?php /* サービスページの場合は通常PC用フッターは読み込まない */ ?>
<?php else: ?>
	<?php get_template_part('_template/footer/footer'); ?>
<?php endif; ?>
<!-- wp_footer -->
<?php wp_footer(); ?>
<!-- /wp_footer -->
<?php get_template_part('_template/embed-tag/before-close-body'); ?>
</body>

</html>
