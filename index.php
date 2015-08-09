
<html>
<head>
<title>Ping! <?php echo wp_title(); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.css">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<div id="wrapper">
	<?php get_header(); ?>
<div id="main">
<div id="content">aa
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 class="post_title"><?php the_title(); ?></h1>
<h4 class="post_time">Posted on <?php the_time('F jS, Y') ?> by <?php the_author(); ?> </h4>
<p><?php the_content(__('(more...)')); ?></p>
<hr /> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
</div>
</body>
<script>
var original_text;
$('.coming-soon').hover(function() {
	original_text = $(this).text();
	$(this).text('Coming Soon');
}, function() {
	$(this).text(original_text);
});
</script>
</html>