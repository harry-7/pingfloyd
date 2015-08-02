<?php /* Template Name: Tag */ ?>

<html>
<head>
<title>Ping!<?php echo wp_title(); ?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.css">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/category.css">

</head>
<body>
<div id="wrapper">
	<?php get_header(); ?>
<div id="main">

<div class="container">
	<div id="page_title" class="col-md-12">#<?php single_tag_title(); ?></div>
	<?php 
	// $colors_main = ["#B71C1C", "#880E4F", "#4A148C", "#0D47A1", "#006064", "#004D40", "#33691E", "#3E2723"];
	?>
	<div class="col-md-12">
		<div class="row">
			<?php 
$tag_name = single_tag_title('', false);
global $wp_query;
$original_query = $wp_query;
$wp_query = null;
// var_dump($tagname);
$args = Array('posts_per_page'=> -1, 'tag'=> $tag_name);
$wp_query = new WP_Query( $args );
			if (have_posts()) : while (have_posts()) : the_post(); ?>
			<a href="<?php echo the_permalink() ?>"><div class="col-md-4 tile anim"><span class="post_tile"><?php the_title(); ?></span><span class="author_tile">by <?php the_author(); ?> &bull; <?php the_time('F jS, Y') ?></span><span class="tags_tile">
				<?php
		$tags = get_the_tags();
				// $tags = get_the_tags();
		// echo var_dump($tags);
		$tagname = Array();
		foreach ( $tags as $tag ) {
	$tagname[] = $tag->name;
	// implode()
}
	echo implode($tagname, ' &bull; ');
?>
			</span>
			</div>
		</a>
			<?php endwhile; else: ?>
			<h4><?php _e('Sorry, couldn\'t find any posts for this tag.'); ?></h4><?php endif; 
			$wp_query = null;
$wp_query = $original_query;
wp_reset_postdata();
?>
		</div>
	</div>

</div>


</div>
<?php get_footer(); ?>

<div id="delimiter">
</div>
</div>
</body>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script>
	var width_smalltile = $('.col-md-4').width();
	var width_bigtile = $('#cat_topheader').width();

	// console.log(width);
	$('.col-md-4').css({height: width_smalltile/1.5});
	$('#cat_topheader').css({height: width_bigtile/4});

	</script>
</html>