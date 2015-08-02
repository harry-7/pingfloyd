<?php /* Template Name: Category */ ?>

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
	<div id="page_title" class="col-md-12"><?php single_cat_title(); ?></div>
<?php
$this_category = get_the_category();
$args = array( 'numberposts' => '1', 'category' => get_cat_ID(single_cat_title('', false)) );
// var_dump($this_category);
$latest_post = wp_get_recent_posts($args);
	
	// $colors_main = Array("#B71C1C", "#880E4F", "#4A148C", "#0D47A1", "#006064", "#004D40", "#33691E", "#3E2723");
	// $color = $colors_main[rand(0, 7)];

foreach( $latest_post as $post ){
		echo '<a href="' . get_permalink($post["ID"]) . '">';
		echo '<div class="col-md-12 anim" id="cat_topheader"><span class="post_tile">';
		echo $post["post_title"].'</span><span class="author_tile">';
		// $author = get_the_author($post["ID"]);
		echo 'by ' . get_the_author_meta('display_name', $post["post_author"]) . ' &bull; ' . get_post_time('F jS, Y', false, $post["ID"]) . '</span><span class="tags_tile"><ul class="tags_area">';
		$tags = wp_get_post_tags($post["ID"]);
		// echo var_dump($tags);

		foreach ( $tags as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
	echo "<li class='tag category_tag'>";
	echo "{$tag->name}</li>";
}
echo '</ul></span></div></a>';
	}
	?>

	<div class="col-md-12">
		<div class="row">
			<?php 
$category_name = single_cat_title('', false);
global $wp_query;
$original_query = $wp_query;
$wp_query = null;
$args = Array('posts_per_page'=> -1, 'category_name'=> $category_name);

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
			<h4><?php _e('Sorry, couldn\'t find any posts for this category'); ?></h4><?php endif; 
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
