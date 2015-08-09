<?php /* Template Name: EditorialNote */ ?>

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
	font-size: 1.3em;
}
a {
	text-decoration: none;
	color: black;	
}
</style>
</head>
<body>
<div id="wrapper">
	<?php get_header(); ?>
<div id="main">
<div id="content">
	<h1 id="page_title">Editorial Note</h1>
	<hr />
	<p>
	<br />
	Coming Soon. 
</p>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

</div>
<div id="delimiter">
</div>
</div>
</body>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

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