<header class="l-headerSp js-headerSp">
	<div class="l-headerSp__inner">
		<?php $tag = is_front_page() ? 'h1' : 'div'; ?>
		<<?php echo $tag; ?> class="l-headerSp__logo">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="l-headerSp__logo--link">
				<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/common/logo.png" alt="株式会社AUS" width="348" height="134">
			</a>
		</<?php echo $tag; ?>>
		<ul class="l-headerSp__cta">
			<li class="l-headerSp__cta--item">
				<a href="<?php echo esc_url(home_url('/materials')); ?>" class="l-headerSp__cta--btn">
					<div class="l-headerSp__cta--icon"><img src="<?php echo get_template_directory_uri(); ?>/_assets/img/common/common_icon_dl_primary.png" alt="" width="120" height="120"></div>
					<div class="l-headerSp__cta--txt">資料DL</div>
				</a>
			</li>
			<li class="l-headerSp__cta--item">
				<a href="<?php echo esc_url(home_url('/contact')); ?>" class="l-headerSp__cta--btn">
					<div class="l-headerSp__cta--icon"><img src="<?php echo get_template_directory_uri(); ?>/_assets/img/common/common_icon_mail_primary.png" alt="" width="120" height="120"></div>
					<div class="l-headerSp__cta--txt">お問い合わせ</div>
				</a>
			</li>
		</ul>
		<div class="l-headerSp__menu js-headerSp__menu">
			<span class="l-headerSp__menu--line"></span>
			<span class="l-headerSp__menu--line"></span>
			<span class="l-headerSp__menu--line"></span>
		</div>
	</div>
</header>

<div class="l-spMenu js-spMenu">
	<div class="l-spMenu__inner">
		<nav class="l-spMenu__nav">
			<ul class="l-spMenu__nav--list">
				<li class="l-spMenu__nav--item">
					<div class="l-spMenu__nav--link l-spMenu__nav--parent">サービス内容</div>
					<ul class="l-spMenu__nav--child">
						<li class="l-spMenu__navChild--item">
							<a href="<?php echo esc_url(home_url('/sharedse')); ?>" class="l-spMenu__navChild--link">Shared SE</a>
						</li>
						<li class="l-spMenu__navChild--item">
							<a href="<?php echo esc_url(home_url('/infinityplayblocks')); ?>" class="l-spMenu__navChild--link">Infinity Playblocks</a>
						</li>
						<li class="l-spMenu__navChild--item">
							<a href="<?php echo esc_url(home_url('/harmonysase')); ?>" class="l-spMenu__navChild--link">HarmonySASE</a>
						</li>
						<li class="l-spMenu__navChild--item">
							<a href="<?php echo esc_url(home_url('/deeptrace')); ?>" class="l-spMenu__navChild--link">DeepTrace</a>
						</li>
						<li class="l-spMenu__navChild--item">
							<a href="<?php echo esc_url(home_url('/activedefense')); ?>" class="l-spMenu__navChild--link">ActiveDefense</a>
						</li>
						<li class="l-spMenu__navChild--item">
							<a href="<?php echo esc_url(home_url('/trustbuild#function')); ?>" class="l-spMenu__navChild--link">Zero Trust</a>
						</li>
					</ul>
				</li>
				<li class="l-spMenu__nav--item"><a href="<?php echo esc_url(home_url('/company')); ?>" class="l-spMenu__nav--link">会社概要</a></li>
				<li class="l-spMenu__nav--item"><a href="<?php echo esc_url(home_url('/news')); ?>" class="l-spMenu__nav--link">新着情報</a></li>
				<li class="l-spMenu__nav--item"><a href="<?php echo esc_url(home_url('/recruit')); ?>" class="l-spMenu__nav--link">採用情報</a></li>
				<li class="l-spMenu__nav--item"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="l-spMenu__nav--link">お問い合わせ</a></li>
			</ul>
		</nav>
		<ul class="l-spMenu__cta">
			<li class="l-spMenu__cta--item">
				<a href="<?php echo esc_url(home_url('/materials')); ?>" class="l-spMenu__cta--link">
					<div class="l-spMenu__cta--icon"><img src="<?php echo get_template_directory_uri(); ?>/_assets/img/common/common_icon_note_white.png" alt="" width="120" height="120"></div>
					<div class="l-spMenu__cta--txt">資料ダウンロード</div>
				</a>
			</li>
			<li class="l-spMenu__cta--item">
				<a href="<?php echo esc_url(home_url('/contact')); ?>" class="l-spMenu__cta--link l-spMenu__cta--black">
					<div class="l-spMenu__cta--icon"><img src="<?php echo get_template_directory_uri(); ?>/_assets/img/common/common_icon_mail_white.png" alt="" width="120" height="120"></div>
					<div class="l-spMenu__cta--txt">お問い合わせ</div>
				</a>
			</li>
		</ul>
	</div>
</div>
