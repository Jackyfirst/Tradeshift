<?php
$args = array(
	'post_type'=>'event',
	'posts_per_page'=>-1,
	'meta_key'=>'date',
	'orderby'=>'meta_value',
	'order'=>'desc',
	'meta_query'=>array(
		array(
			'key'=>'date',
			'value'=>date('Y-m-d'),
			'compare'=>'<',
			'type'=>'DATE',
		),
	),
);
$past_events = new WP_Query($args);

<?php while ($past_events->have_posts()) : $past_events->the_post(); ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>