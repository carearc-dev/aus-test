<?php /*
*
* Template Name: 【選択禁止】お問い合わせフォーム
*
*/ ?>

<?php get_header(); ?>

<div class="l-pageMv">
	<picture class="l-pageMv__bg" data-aos="zoom-out" data-aos-duration="500">
		<source srcset="<?php echo get_template_directory_uri(); ?>/_assets/img/contact/contact_mv.jpg" media="(min-width: 768px)" />
		<source srcset="<?php echo get_template_directory_uri(); ?>/_assets/img/contact/contact_mv_sp.jpg" media="(max-width: 767px)" />
		<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/contact/contact_mv.jpg" alt="" width="3024" height="1350">
	</picture>
	<hgroup class="l-pageMv__ttl" data-aos="fade-right" data-aos-delay="300" data-aos-duration="300">
		<p class="l-pageMv__ttl--en">CONTACT</p>
		<h1 class="l-pageMv__ttl--ja">お問い合わせフォーム</h1>
	</hgroup>
</div>

<section class="p-contact">
	<div class="l-container__1000">
		<div class="p-contact__inner">
			<?php echo apply_shortcodes('[contact-form-7 id="999f194" title="お問い合わせ"]'); ?>
			<script>
				document.addEventListener('wpcf7mailsent', function(event) {
					setTimeout(() => {
						location = '/thanks';
					}, 1000); // Wait for 1 seconds to redirect.
				}, false);
			</script>
		</div>
	</div>
</section>

<?php get_footer(); ?>
