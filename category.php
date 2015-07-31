<?php /* Template Name: Category */ ?>

<html>
<head>
<title>Ping!<?php echo wp_title(); ?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.css">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<style>
.container {
	width: 80%;
	margin-left: 10%;
}
.col-md-3 {

}
#cat_topheader {
	background-color: blue;
	font-family: exo;
	font-size: 2em;
	color: white;
	padding: 20px;
	/*margin-bottom: 20px;*/
	text-shadow: 0 0 1px black;
}
#page_title {
	margin-top: 30px;
	margin-bottom: 30px;
}
.tile {
	background-color: yellow;
	padding: 20px;
	font-family: exo;
	font-size: 1.3em;
	color: white;
	text-shadow: 0 0 2px black;
	opacity: 0.7;

	padding: 10px;
	/*border: 1px solid black;*/
	/*box-shadow: 0 0 3px black;*/
}
.tile:hover {
	opacity: 1;
	cursor: pointer;
}
.post_tile {
	display: block;
	font-family: gotham;
	text-transform: uppercase;
	font-size: 1em;
}
.author_tile {
	display: block;
	font-family: gotham;

	color: rgba(255,255,255,1);
	font-size: 0.8em;
}
.tags_area {
	font-size: 0.8em;
}
.tag {
	border: 1px solid white;

}
.tags_tile {
	position: absolute;
	bottom: 20px;
	font-size: 0.6em;
}
#cat_topheader .tags_tile {
	font-size: 0.5em;
}
#cat_topheader .post_tile {

}
#cat_topheader .author_tile {
	font-size: 0.7em;
}
a {
	text-decoration: none;
}
</style>

</head>
<body>
<div id="wrapper">
	<?php get_header(); ?>
<div id="main">

<div class="container">

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
	<div id="page_title" class="col-md-12"><?php single_cat_title(); ?></div>

	<div class="col-md-12">
		<div class="row">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-md-4 tile"><span class="post_tile"><?php the_title(); ?></span><span class="author_tile">by <?php the_author(); ?></span><span class="tags_tile">
				Computers &bull; Sports &bull; Techno
			</span>
			</div>
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
	$('#cat_topheader').css({height: width_bigtile/4});

	</script>
</html>