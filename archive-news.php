<?php get_header(); ?>

<div class="l-pageMv l-pageMv--positionTop">
	<picture class="l-pageMv__bg" data-aos="zoom-out" data-aos-duration="500">
		<source srcset="<?php echo get_template_directory_uri(); ?>/_assets/img/news/news_mv.jpg" media="(min-width: 768px)" />
		<source srcset="<?php echo get_template_directory_uri(); ?>/_assets/img/news/news_mv_sp.jpg" media="(max-width: 767px)" />
		<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/news/news_mv.jpg" alt="" width="3024" height="1350">
	</picture>
	<hgroup class="l-pageMv__ttl" data-aos="fade-right" data-aos-delay="300" data-aos-duration="300">
		<p class="l-pageMv__ttl--en">NEWS</p>
		<h1 class="l-pageMv__ttl--ja">新着情報</h1>
	</hgroup>
</div>

<section class="p-news-archive">
	<div class="l-container__920">
		<?php if (have_posts()) : ?>
			<!-- 投稿データが取得できない場合の処理 -->
			<div id="category" class="p-news-archive__category">
				<div class="p-news-archive__category--ttl">CATEGORY</div>
				<ul class="p-news-archive__category--list">
					<li class="p-news-archive__category--item">
						<a href="<?php echo esc_url(home_url('/news')); ?>#category" class="p-news-archive__category--link <?php if (!is_tax($taxonomy)) echo 'isActive'; ?>">ALL</a>
					</li>
					<?php
					$taxonomy = 'news_category'; //タクソノミー名
					$args = array(
						'hide_empty' => true, //投稿をもたないタームは出力しない
						'parent' => 0,
						'order' => 'DESC', //昇順(ASC)か降順(DESC)かを指定する。デフォルトは降順(DESC)
						'orderby' => 'menu_order',
					);
					$terms = get_terms($taxonomy, $args);
					?>
					<?php if ($terms): ?>
						<?php foreach ($terms as $term): ?>
							<?php
							$term_link = get_term_link($term); //タームのリンクを取得
							$term_name = $term->name; //ターム名を取得
							?>
							<li class="p-news-archive__category--item">
								<a href="<?php echo $term_link; ?>#category" class="p-news-archive__category--link"><?php echo $term_name; ?></a>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
			<ul class="p-news-archive__list">
				<?php while (have_posts()) : the_post(); ?>
					<li class="p-news-archive__item" data-aos="fade-up">
						<?php get_template_part('_template/news/news-card');  ?>
					</li>
				<?php endwhile; ?>
			</ul>
			<?php
			if (function_exists('wp_pagenavi')) {
				wp_pagenavi();
			}
			?>
	</div>
<?php else : ?>

<?php endif; ?>
</section>


<?php get_footer(); ?>
