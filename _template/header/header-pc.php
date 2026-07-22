<?php if (is_front_page()) : ?>
<?php else : ?>
	<div class="l-header__space"></div>
<?php endif; ?>
<button class="l-header__top js-header__top">
	<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/common/common_icon_top_primary.png" alt="" width="120" height="120">
</button>
<header class="l-headerPc js-headerPc">
	<div class="l-headerPc__inner">
		<?php $tag = is_front_page() ? 'h1' : 'div'; ?>
		<<?php echo $tag; ?> class="l-headerPc__logo">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="l-headerPc__logo--link">
				<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/common/logo.png" alt="株式会社AUS" width="348" height="134">
			</a>
		</<?php echo $tag; ?>>
		<nav class="l-headerPc__nav">
			<ul class="l-headerPc__nav--list">
				<li class="l-headerPc__nav--item">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="l-headerPc__nav--link">Top</a>
				</li>
				<li class="l-headerPc__nav--item js-headerPc__nav--item">
					<div class="l-headerPc__nav--link">Service</div>
					<div class="l-headerPc__child js-headerPc__child">
						<div class="l-headerPc-child__inner">
							<div class="l-headerPc-child__inner2">
								<div class="l-headerPc-child__head">
									<p class="l-headerPc-child__head--ja">製品・サービス</p>
									<p class="l-headerPc-child__head--en">PRODUCT&SERVICE</p>
								</div>
								<ul class="l-headerPc-child__list">
									<li class="l-headerPc-child__item">
										<div class="l-headerPc-child__item--img">
											<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/header/header_img_01.png" alt="" width="140" height="140">
										</div>
										<p class="l-headerPc-child__ttl">ITコンサルティング事業</p>
										<p class="l-headerPc-child__desc">IT経営戦略に伴走</p>
										<ul class="l-headerPc-child__pages">
											<li class="l-headerPc-child__page">
												<a href="<?php echo esc_url(home_url('/sharedse')); ?>" class="l-headerPc-child__page--link">Shared SE</a>
											</li>
										</ul>
									</li>
									<li class="l-headerPc-child__item">
										<div class="l-headerPc-child__item--img">
											<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/header/header_img_02.png" alt="" width="140" height="140">
										</div>
										<p class="l-headerPc-child__ttl">ITリスク管理事業</p>
										<p class="l-headerPc-child__desc">ユーザーリスクを 統合管理</p>
										<ul class="l-headerPc-child__pages">
											<li class="l-headerPc-child__page">
												<a href="<?php echo esc_url(home_url('/infinityplayblocks')); ?>" class="l-headerPc-child__page--link">Infinity Playblocks</a>
											</li>
											<li class="l-headerPc-child__page">
												<a href="<?php echo esc_url(home_url('/harmonysase')); ?>" class="l-headerPc-child__page--link">HarmonySASE</a>
											</li>
										</ul>
									</li>
									<li class="l-headerPc-child__item">
										<div class="l-headerPc-child__item--img">
											<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/header/header_img_03.png" alt="" width="140" height="140">
										</div>
										<p class="l-headerPc-child__ttl">システムリスク管理事業</p>
										<p class="l-headerPc-child__desc">システムリスクの 徹底排除</p>
										<ul class="l-headerPc-child__pages">
											<li class="l-headerPc-child__page">
												<a href="<?php echo esc_url(home_url('/deeptrace')); ?>" class="l-headerPc-child__page--link">DeepTrace</a>
											</li>
										</ul>
									</li>
									<li class="l-headerPc-child__item">
										<div class="l-headerPc-child__item--img">
											<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/header/header_img_04.png" alt="" width="140" height="140">
										</div>
										<p class="l-headerPc-child__ttl">オフィスリスク管理事業</p>
										<p class="l-headerPc-child__desc">安全なビジネス環境の提供</p>
										<ul class="l-headerPc-child__pages">
											<li class="l-headerPc-child__page">
												<a href="<?php echo esc_url(home_url('/activedefense')); ?>" class="l-headerPc-child__page--link">ActiveDefense</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li class="l-headerPc__nav--item">
					<a href="<?php echo esc_url(home_url('/company')); ?>" class="l-headerPc__nav--link">Company</a>
				</li>
				<li class="l-headerPc__nav--item">
					<a href="<?php echo esc_url(home_url('/news')); ?>" class="l-headerPc__nav--link">News</a>
				</li>
				<li class="l-headerPc__nav--item">
					<a href="<?php echo esc_url(home_url('/recruit')); ?>" class="l-headerPc__nav--link">Recruit</a>
				</li>
			</ul>
		</nav>
		<ul class="l-headerPc__cta">
			<li class="l-headerPc__cta--item">
				<a href="<?php echo esc_url(home_url('/materials')); ?>" class="l-headerPc__cta--btn">資料ダウンロード</a>
			</li>
			<li class="l-headerPc__cta--item">
				<a href="<?php echo esc_url(home_url('/contact')); ?>" class="l-headerPc__cta--btn l-headerPc__cta--black">お問い合わせ</a>
			</li>
		</ul>
	</div>
</header>
