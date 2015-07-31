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

	<div class="col-md-12 anim" id="cat_topheader"><span class="post_tile">How it all started</span><span class="author_tile">Mrinal Dhar</span><span class="tags_tile">
				<ul class="tags_area">
<li class="tag anim">Computers</li>
<li class="tag anim">Programmming</li>
<li class="tag anim">Sports</li>
<li class="tag anim">Kalam</li>
<li class="tag anim">Ping!</li>
<li class="tag anim">Ping!</li>
<li class="tag anim">Ping!</li>
<li class="tag anim">Ping!</li>
<li class="tag anim">Ping!</li>
<li class="tag anim">Ping!</li>
<li class="tag anim">Ping!</li>

</ul>
			</span>
			</div>

	<div class="col-md-12">
		<div class="row">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<a href="<?php echo the_permalink() ?>"><div class="col-md-4 tile"><span class="post_tile"><?php the_title(); ?></span><span class="author_tile">by <?php the_author(); ?></span><span class="tags_tile">
				Computers &bull; Sports &bull; Techno
			</span>
			</div>
		</a>
			<?php endwhile; else: ?>
			<h4><?php _e('Sorry, couldn\'t find any posts for this category'); ?></h4><?php endif; ?>
		</div>
	</div>

</div>


</div>
<div id="delimiter">
</div>
</div>
</body>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script>
	var width_smalltile = $('.col-md-4').width();
	var width_bigtile = $('#cat_topheader').width();

	// console.log(width);
	$('.col-md-4').css({height: width_smalltile/2});
	$('#cat_topheader').css({height: width_bigtile/3});

	</script>
</html>