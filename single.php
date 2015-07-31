<?php /* Template Name: Article */ ?>

<html>
<head>
<title>Ping!<?php echo wp_title(); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.css">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
<div id="wrapper">
	<?php get_header(); ?>
<div id="main">
<div id="content">

<?php the_post(); ?>
<h1 class="post_title"><?php the_title(); ?></h1>

<h4 class="post_time">Posted on <?php the_time('F jS, Y') ?> by <?php the_author(); ?> </h4>
<ul class="tags_area">

		<?php
		$tags = get_the_tags();

		foreach ( $tags as $tag ) {
			$tag_link = get_tag_link( $tag->term_id );
			
	echo "<li class='tag anim'><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
	echo "{$tag->name}</a></li>";
}
?>
</ul>
<hr />

<p><?php the_content(__('(more...)')); ?></p>
<hr /> 

</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
</div>
</body>
</html>