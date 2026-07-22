<?php /*
*
* Template Name: 【選択禁止】概要資料請求フォーム
*
*/ ?>

<?php get_header(); ?>

<section class="p-download-form">
	<div class="l-container">
		<hgroup class="l-pageMv__ttl" data-aos="fade-up">
			<p class="l-pageMv__ttl--en p-download-form__ttl">概要資料請求フォーム</p>
			<h1 class="l-pageMv__ttl--ja p-download-form__head">ご入力いただいたメールアドレス宛に、<br class="u-pcNone">資料ダウンロード情報をお送りいたします。</h1>
		</hgroup>
		<div class="p-download-form__inner">
			<div class="c-dot c-dot--large p-download-form__dot1" data-aos="fade-in"></div>
			<div class="c-dot c-dot--medium p-download-form__dot2" data-aos="fade-in"></div>
			<div class="l-container__1000">
				<div class="p-download-form__form">
					<?php echo apply_shortcodes('[contact-form-7 id="0b4c001" title="資料請求"]'); ?>
					<script>
						document.addEventListener('wpcf7mailsent', function(event) {
							setTimeout(() => {
								location = '/materials/download/complete';
							}, 1000); // Wait for 1 seconds to redirect.
						}, false);
					</script>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
