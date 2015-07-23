<html>
<head>
<title>Ping!</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<div id="wrapper">
	<?php get_header(); ?>
<div id="main">
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 class="post_title">The new freshers: a different perspective.</h1>
<h4 class="post_time">Posted on <?php the_time('F jS, Y') ?></h4>
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
</html>