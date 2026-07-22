<?php
// =====================変数定義=====================
$hoge =  get_field('hoge');

// =================================================
?>
<?php the_title(); /*タイトル*/ ?>
<?php the_permalink(); /*投稿のURL*/ ?>
<?php /*▼HTML表示用(yyyy.mm.dd)*/ ?>
<?php the_time('Y.m.d'); ?>
<?php /*▼datatime属性出力用*/ ?>
<?php the_time('Y-m-d'); ?>

<!-- ▼▼▼▼▼投稿に紐づいたカスタムタクソノミーのタームを出力する▼▼▼▼▼ -->
<?php $terms = get_the_terms(get_the_ID(), 'hoge'); /*タクソノミーhogeのターム情報を取得*/ ?>
<?php foreach ($terms as $term) : ?>
	<?php $term_link = get_term_link($term); /*タームのURLを取得*/ ?>
	<?php echo $term->name; /*ターム名を出力*/ ?>
	<?php echo $term_link; /*タームURLを出力*/ ?>
<?php endforeach; ?>
<!-- ▲▲▲▲▲ -->
