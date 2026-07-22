<?php /*
*
* Template Name: 【選択禁止】資料ダウンロード
*
*/ ?>

<?php get_header(); ?>

<div class="l-pageMv">
	<picture class="l-pageMv__bg" data-aos="zoom-out" data-aos-duration="500">
		<source srcset="<?php echo get_template_directory_uri(); ?>/_assets/img/download/download_mv.jpg" media="(min-width: 768px)" />
		<source srcset="<?php echo get_template_directory_uri(); ?>/_assets/img/download/download_mv_sp.jpg" media="(max-width: 767px)" />
		<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/download/download_mv_sp.jpg" alt="" width="3024" height="1350">
	</picture>
	<hgroup class="l-pageMv__ttl" data-aos="fade-right" data-aos-delay="300" data-aos-duration="300">
		<p class="l-pageMv__ttl--en">DOWNLOAD</p>
		<h1 class="l-pageMv__ttl--ja">資料ダウンロード</h1>
	</hgroup>
</div>

<section class="p-download">
	<div class="l-container">
		<hgroup class="c-pageTtlA">
			<p class="c-pageTtlA__en">Service</p>
			<h2 class="c-pageTtlA__ja">サービス資料一覧</h2>
		</hgroup>
		<ul class="p-download__list">
			<li class="p-download__item">
				<a href="<?php echo esc_url(home_url('/materials/download')); ?>" class="p-download__item--link">
					<div class="p-download__item--img">
						<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/download/download_img_01.jpg" alt="" width="708" height="428">
					</div>
					<div class="p-download__item--tag">製品紹介</div>
					<h3 class="p-download__item--ttl">Shared SE</h3>
					<p class="p-download__item--body">“IT担当がいない”中小企業に、<br>
						専任SEの安心と提案力を。</p>
				</a>
			</li>
			<li class="p-download__item">
				<a href="<?php echo esc_url(home_url('/materials/download')); ?>" class="p-download__item--link">
					<div class="p-download__item--img">
						<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/download/download_img_02.jpg" alt="" width="708" height="428">
					</div>
					<div class="p-download__item--tag">製品紹介</div>
					<h3 class="p-download__item--ttl">Infinity Playblocks</h3>
					<p class="p-download__item--body">ユーザーサイドのセキュリティー対策を<br>
						統合的に提供</p>
				</a>
			</li>
			<li class="p-download__item">
				<a href="<?php echo esc_url(home_url('/materials/download')); ?>" class="p-download__item--link">
					<div class="p-download__item--img">
						<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/download/download_img_04.jpg" alt="" width="708" height="428">
					</div>
					<div class="p-download__item--tag">製品紹介</div>
					<h3 class="p-download__item--ttl">HarmonySASE</h3>
					<p class="p-download__item--body">ユーザーサイドのセキュリティー対策を<br>
						統合的に提供</p>
				</a>
			</li>
			<li class="p-download__item">
				<a href="<?php echo esc_url(home_url('/materials/download')); ?>" class="p-download__item--link">
					<div class="p-download__item--img">
						<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/download/download_img_03.jpg" alt="" width="708" height="428">
					</div>
					<div class="p-download__item--tag">製品紹介</div>
					<h3 class="p-download__item--ttl">DeepTrace</h3>
					<p class="p-download__item--body">ハッカー視点でシステムリスクを分析</p>
				</a>
			</li>
			<li class="p-download__item">
				<a href="<?php echo esc_url(home_url('/materials/download')); ?>" class="p-download__item--link">
					<div class="p-download__item--img">
						<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/download/download_img_05.jpg" alt="" width="708" height="428">
					</div>
					<div class="p-download__item--tag">製品紹介</div>
					<h3 class="p-download__item--ttl">ActiveDefense</h3>
					<p class="p-download__item--body">犯罪予防のスペシャリストによる安全な<br>
						環境の構築</p>
				</a>
			</li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>
