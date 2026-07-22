<?php get_header(); ?>

<div class="p-index-mv">
	<div class="p-index-mv__bg" data-aos="zoom-out" data-aos-duration="700">
		<video class="p-index-mv__bg--mv" src="<?php echo get_template_directory_uri(); ?>/_assets/mv/main.mp4" autoplay playsinline loop muted poster="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_mv_img_01.jpg"></video>
	</div>
	<div class="l-container">
		<div class="p-index-mv__inner">
			<!--
			<div class="p-index-mv__icon" data-aos="fade-in" data-aos-delay="450" data-aos-duration="400">
				<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/common/favicon.png" alt="" />
			</div>
			-->
			<picture class="p-index-mv__ttl" data-aos="fade-right" data-aos-delay="400" data-aos-duration="400">
				<source srcset="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_mv_copy.png" media="(min-width: 768px)" />
				<source srcset="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_mv_copy_sp.png" media="(max-width: 767px)" />
				<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_mv_copy.png" alt="Secure The Success" /><!-- 上記それ以外で表示 -->
			</picture>
			<p class="p-index-mv__desc" data-aos="fade-left" data-aos-delay="450" data-aos-duration="400">意識せず、誰もが安全を<br class="u-pcNone">享受できる社会へ</p>
		</div>
	</div>
</div>

<section class="p-index-mission">
	<div class="l-container">
		<div class="p-index-mission__inner">
			<div class="p-index-mission__box" data-aos="fade-up" data-aos-delay="200">
				<hgroup>
					<h2 class="p-index-mission__ttl">Mission</h2>
					<p class="p-index-mission__ttl--ja">ミッション</p>
				</hgroup>
				<p class="p-index-mission__head">高水準のセキュリティを、<br>
					すべての人が得られる社会に</p>
				<p class="p-index-mission__body">あらゆる情報が自由にサイバー空間を飛び交い、<br class="u-spNone">
					誰にも平等にそのメリットとリスクが訪れる今。<br>
					セキュリティに求められるのは、<br class="u-spNone">
					その安全をすべての人が享受できる社会の実現。</p>
				<div class="p-index-mission__btn">
					<a href="<?php echo esc_url(home_url('/company')); ?>" class="c-btnA">COMPANY</a>
				</div>
			</div>
			<div class="p-index-mission__img" data-aos="fade-to-right">
				<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_mission_img_01.jpg" alt="" width="1652" height="808">
			</div>
		</div>
	</div>
</section>
<section class="p-index-solution">
	<div class="l-container">
		<hgroup class="c-sectionTtlA">
			<p class="c-sectionTtlA__en">SOLUTION</p>
			<h2 class="c-sectionTtlA__ja">事業紹介</h2>
		</hgroup>
		<p class="p-index-solution__desc">企業が専門性の高いセキュリティ対策を自社内で完結することは容易ではありません。</p>
		<div class="p-index-solution__sec1">
			<div class="c-dot p-index-solution-sec1__dot1" data-aos="fade-in"></div>
			<div class="c-dot p-index-solution-sec1__dot2" data-aos="fade-in"></div>
			<div class="p-index-solution-sec1__txt" data-aos="fade-to-right">
				<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_txt_01.svg" alt="Security Provider" width="1525" height="174">
			</div>
			<div class="p-index-solution-sec1__inner">
				<div class="p-index-solution-sec1__img1" data-aos="zoom-out" data-aos-anchor=".p-index-solution-sec1__inner"><img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_img_01.png" alt="" width="728" height="570"></div>
				<div class="p-index-solution-sec1__img2" data-aos="zoom-out" data-aos-anchor=".p-index-solution-sec1__inner"><img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_img_02.png" alt="" width="728" height="570"></div>
				<div class="p-index-solution-sec1__head" data-aos="zoom-out" data-aos-anchor=".p-index-solution-sec1__inner">
					<p class="p-index-solution-sec1__head--en">AUS</p>
					<p class="p-index-solution-sec1__head--ja">セキュリティ<br>プロバイダ</p>
				</div>
				<ul class="p-index-solution-sec1__list">
					<li class="p-index-solution-sec1__item" data-aos="zoom-out" data-aos-delay="300" data-aos-anchor=".p-index-solution-sec1__inner">
						<div class="p-index-solution-sec1__icon"><img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_icon_01.png" alt="" width="150" height="180"></div>
						<p class="p-index-solution-sec1__ttl">ITコンサル<br class="u-pcNone">ティング<br>事業</p>
					</li>
					<li class="p-index-solution-sec1__item" data-aos="zoom-out" data-aos-delay="400" data-aos-anchor=".p-index-solution-sec1__inner">
						<div class="p-index-solution-sec1__icon"><img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_icon_02.png" alt="" width="150" height="180"></div>
						<p class="p-index-solution-sec1__ttl">オフィスリスク<br>管理事業</p>
					</li>
					<li class="p-index-solution-sec1__item" data-aos="zoom-out" data-aos-delay="500" data-aos-anchor=".p-index-solution-sec1__inner">
						<div class="p-index-solution-sec1__icon"><img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_icon_03.png" alt="" width="150" height="180"></div>
						<p class="p-index-solution-sec1__ttl">システムリスク<br>管理事業</p>
					</li>
					<li class="p-index-solution-sec1__item" data-aos="zoom-out" data-aos-delay="600" data-aos-anchor=".p-index-solution-sec1__inner">
						<div class="p-index-solution-sec1__icon"><img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_icon_04.png" alt="" width="150" height="180"></div>
						<p class="p-index-solution-sec1__ttl">ITリスク管理<br>事業</p>
					</li>
				</ul>
			</div>
		</div><!-- sec1 -->

		<div class="p-index-solution__sec2">
			<div class="l-container__1400">
				<hgroup class="c-sectionTtlA">
					<p class="c-sectionTtlA__en">Business Domain</p>
					<h2 class="c-sectionTtlA__ja">ビジネスドメイン</h2>
				</hgroup>
				<p class="p-index-solution__desc">経営影響の大きなビジネスドメインを包括的に<br>
					サポートし、安定的な経営を支えます。</p>
				<div class="p-index-solution-sec2__container js-index-solution-sec2__container" data-aos="fade-up">
					<div class="p-index-solution-sec2__inner">
						<ul class="p-index-solution-sec2__list p-index-solution-sec2__list1">
							<li class="p-index-solution-sec2__ttl">事業ドメイン</li>
							<li class="p-index-solution-sec2__list1--item">
								<div class="p-index-solution-sec2__list1--img">
									<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_icon_01.png" alt="" width="150" height="180">
								</div>
								<div class="p-index-solution-sec2__list1--ttl">ITコンサルティング事業</div>
							</li>
							<li class="p-index-solution-sec2__list1--item">
								<div class="p-index-solution-sec2__list1--img">
									<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_icon_04.png" alt="" width="150" height="180">
								</div>
								<div class="p-index-solution-sec2__list1--ttl">ITリスク管理事業</div>
							</li>
							<li class="p-index-solution-sec2__list1--item">
								<div class="p-index-solution-sec2__list1--img">
									<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_icon_03.png" alt="" width="150" height="180">
								</div>
								<div class="p-index-solution-sec2__list1--ttl">システムリスク管理事業</div>
							</li>
							<li class="p-index-solution-sec2__list1--item">
								<div class="p-index-solution-sec2__list1--img">
									<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_icon_02.png" alt="" width="150" height="180">
								</div>
								<div class="p-index-solution-sec2__list1--ttl">オフィスリスク管理事業</div>
							</li>
						</ul>
						<ul class="p-index-solution-sec2__list p-index-solution-sec2__list2">
							<li class="p-index-solution-sec2__ttl">ソリューション</li>
							<li class="p-index-solution-sec2__list2--item">
								<div class="p-index-solution-sec2__list2--ttl">Shared SE</div>
							</li>
							<li class="p-index-solution-sec2__list2--item">
								<div class="p-index-solution-sec2__list2--ttl">Infinity Playblocks<br>HarmonySASE</div>
							</li>
							<li class="p-index-solution-sec2__list2--item">
								<div class="p-index-solution-sec2__list2--ttl">DeepTrace</div>
							</li>
							<li class="p-index-solution-sec2__list2--item">
								<div class="p-index-solution-sec2__list2--ttl">ActiveDefense</div>
							</li>
						</ul>
						<ul class="p-index-solution-sec2__list p-index-solution-sec2__list3">
							<li class="p-index-solution-sec2__ttl">実務内容</li>
							<li class="p-index-solution-sec2__list3--item">
								<div class="p-index-solution-sec2__list3--head">IT経営戦略に伴走</div>
								<div class="p-index-solution-sec2__list3--body">“IT担当がいない”中小企業に、専任SEの安心と提案力を。</div>
							</li>
							<li class="p-index-solution-sec2__list3--item">
								<div class="p-index-solution-sec2__list3--head">ユーザーリスクを<br>統合管理</div>
								<div class="p-index-solution-sec2__list3--body">ユーザーサイドのセキュリティー対策を統合的に提供</div>
							</li>
							<li class="p-index-solution-sec2__list3--item">
								<div class="p-index-solution-sec2__list3--head">システムリスクの<br>徹底排除</div>
								<div class="p-index-solution-sec2__list3--body">ハッカー視点でシステムリスクを分析</div>
							</li>
							<li class="p-index-solution-sec2__list3--item">
								<div class="p-index-solution-sec2__list3--head">安全なビジネス環境の提供</div>
								<div class="p-index-solution-sec2__list3--body">犯罪予防のスペシャリストによる安全な環境の構築</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="p-index-solution_sec2__btns">
					<button class="p-index-solution_sec2__btn p-index-solution_sec2__btn--left js-index-solution_sec2__btn--left"></button>
					<button class="p-index-solution_sec2__btn p-index-solution_sec2__btn--right js-index-solution_sec2__btn--right"></button>
				</div>
			</div>
		</div><!-- sec2 -->

		<div class="p-index-solution__sec3">
			<div class="c-dot c-dot--medium p-index-solution__sec3__dot1" data-aos="fade-in"></div>
			<div class="c-dot c-dot--large p-index-solution__sec3__dot2" data-aos="fade-in"></div>
			<hgroup class="c-sectionTtlA">
				<p class="c-sectionTtlA__en">Service</p>
				<h2 class="c-sectionTtlA__ja">サービス</h2>
			</hgroup>
			<p class="p-index-solution__desc">課題に直結する専門性の高いセキュリティーソリュー<br>
				ションを展開し課題解決をお約束します。</p>
			<ul class="p-index-solution-sec3__list">
				<li class="p-index-solution-sec3__item">
					<a href="<?php echo esc_url(home_url('/sharedse')); ?>" class="p-index-solution-sec3__item--link" data-aos="zoom-out" data-aos-anchor=".p-index-solution-sec3__list">
						<div class="p-index-solution-sec3__item--img">
							<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_img_03.jpg" alt="Shared SE" width="728" height="570">
						</div>
						<h4 class="p-index-solution-sec3__item--ttl">Shared SE</h4>
					</a>
				</li>
				<li class="p-index-solution-sec3__item">
					<a href="<?php echo esc_url(home_url('/infinityplayblocks')); ?>" class="p-index-solution-sec3__item--link" data-aos="zoom-out" data-aos-delay="200" data-aos-anchor=".p-index-solution-sec3__list">
						<div class="p-index-solution-sec3__item--img">
							<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_img_04.jpg" alt="Infinity Playblocks" width="728" height="570">
						</div>
						<h4 class="p-index-solution-sec3__item--ttl">Infinity Playblocks</h4>
					</a>
				</li>
				<li class="p-index-solution-sec3__item">
					<a href="<?php echo esc_url(home_url('/harmonysase')); ?>" class="p-index-solution-sec3__item--link" data-aos="zoom-out" data-aos-delay="300" data-aos-anchor=".p-index-solution-sec3__list">
						<div class="p-index-solution-sec3__item--img">
							<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_img_05.jpg" alt="HarmonySASE" width="728" height="570">
						</div>
						<h4 class="p-index-solution-sec3__item--ttl">HarmonySASE</h4>
					</a>
				</li>
				<li class="p-index-solution-sec3__item">
					<a href="<?php echo esc_url(home_url('/deeptrace')); ?>" class="p-index-solution-sec3__item--link" data-aos="zoom-out" data-aos-delay="400" data-aos-anchor=".p-index-solution-sec3__list">
						<div class="p-index-solution-sec3__item--img">
							<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_img_06.jpg" alt="DeepTrace" width="728" height="570">
						</div>
						<h4 class="p-index-solution-sec3__item--ttl">DeepTrace</h4>
					</a>
				</li>
				<li class="p-index-solution-sec3__item">
					<a href="<?php echo esc_url(home_url('/activedefense')); ?>" class="p-index-solution-sec3__item--link" data-aos="zoom-out" data-aos-delay="500" data-aos-anchor=".p-index-solution-sec3__list">
						<div class="p-index-solution-sec3__item--img">
							<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/index/index_solution_img_07.jpg" alt="ActiveDefense" width="728" height="570">
						</div>
						<h4 class="p-index-solution-sec3__item--ttl">ActiveDefense</h4>
					</a>
				</li>
			</ul>
		</div><!-- sec3 -->
	</div>
</section>

<section class="p-index-news">
	<?php
	//$argsで表示する投稿の条件を指定
	$args = array(
		'post_type' => 'news',
		'posts_per_page' => 3,
		'order' => 'DESC', //昇順(ASC)か降順(DESC)かを指定する。デフォルトは降順(DESC)
		'orderby' => 'date',
	);
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) : ?>
		<div class="l-container__920">
			<hgroup class="p-index-news__ttl c-sectionTtlA">
				<p class="c-sectionTtlA__en">NEWS</p>
				<h2 class="c-sectionTtlA__ja">新着情報</h2>
			</hgroup>
			<ul class="p-index-news__list">
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<?php
					//コンテンツに登録したテキストを取得
					$content = get_the_content();
					$content = wp_strip_all_tags($content); // HTMLタグ除去
					$excerpt = wp_trim_words($content, 120, '...'); // 40単語まで取得
					?>
					<li class="p-index-news__item">
						<a href="<?php the_permalink(); ?>" class="p-index-news__item--link">
							<time datetime="<?php the_time('Y-m-d'); ?>" class="p-index-news__item--date"><?php the_time('Y.m.d'); ?></time>
							<div class="p-index-news__item--ttl"><?php the_title(); ?></div>
							<p class="p-index-news__item--body"><?php echo $excerpt; ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
			<div class="p-index-news__btn">
				<a href="<?php echo esc_url(home_url('/news')); ?>" class="c-btnA c-btnA--right c-btnA--large">MORE</a>
			</div>
		</div>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</section>

<section class="p-index-sns">
	<div class="l-container">
		<p class="p-index-sns__ttl">株式会社AUS ｜エックス</p>
		<a href="https://x.com/aus_techinfo" class="p-index-sns__link" target="_blank">
			<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/common/common_banner_x_01.jpg" alt="エックスで情報発信中 サイバーセキュリティやセキュリティ対策について更新しています。" width="528" height="176">
		</a>
	</div>
</section>

<section class="p-index-company">
	<?php get_template_part('_template/parts/company-info'); ?>
	<div class="p-index-company__btn">
		<a href="<?php echo esc_url(home_url('/company')); ?>" class="c-btnA c-btnA--center">COMPANY</a>
	</div>
</section>

<?php get_footer(); ?>
