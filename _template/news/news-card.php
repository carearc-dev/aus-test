<a href="<?php the_permalink(); ?>" class="c-news-card__link">
	<?php
	?>
	<time class="c-news-card__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
	<p class="c-news-card__ttl"><?php the_title(); ?></p>
	<?php $terms = get_the_terms(get_the_ID(), 'news_category'); ?>
	<?php if ($terms): ?>
		<ul class="c-news-card__categories">
			<?php foreach ($terms as $term) : ?>
				<?php $term_link = get_term_link($term); ?>
				<li class="c-news-card__category"><?php echo $term->name; ?></li>
			<?php endforeach; ?>
		<?php endif; ?>
		</ul>
</a>
