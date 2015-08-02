<?php /* Template Name: SearchResults */ ?>

<html>
<head>
<title>Ping!<?php echo wp_title(); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.css">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<style>
.post_title {
	font-size: 1.4em;
}
.more-link {
	font-family: gotham;
	text-transform: uppercase;
	color: rgba(0,0,0,0.6);

}
.post_time {
	margin-bottom: 0px;
	font-size: 0.8em;
}
#content p {
	font-size: 1em;
}
a {
	text-decoration: none;
	color: black;	
}
#content img {
	display: none;

}
</style>
</head>
<body>
<div id="wrapper">
	<?php get_header(); ?>
<div id="main">
<div id="content">
	<h1 id="page_title">SEARCH RESULTS</h1>
	<hr />
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<a href="<?php the_permalink(); ?>"><h1 class="post_title"><?php the_title(); ?></h1></a>
<h4 class="post_time">Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content('Continue reading...'); ?></p>
<hr /> 
<?php endwhile; else: ?>
<p><?php _e('Oops! Looks like there are no posts matching that criteria. '); ?></p><?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

</div>
<div id="delimiter">
</div>
</div>
</body>
</html>