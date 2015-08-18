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


It’s here! It’s here! The all new Ping!!
</p><p>
Ping! has always been the byproduct of a group of people that want to put something out there. They want to say something, they want to share something, they want to reach beyond their circle of friends on social media. 
</p><p>

This year, we have an all new Ping!. New writers, new editors, a new design team, and most importantly new ideas and new enthusiasm. 
</p><p>

You have an idea? You want to test out the waters of writing? Want to join our team? It’s all just one step away (Literally, just a click on that link in your footer). Be outspoken. 
</p>
	<p>
<br />


<strong>Mounika Somisetty</strong>, &nbsp;&nbsp;Editor-in-chief
</p>
<p><center>
<br />


<br />
“It's a jungle out there<br />
Disorder and confusion everywhere<br />
No one seems to care<br />
Well I do<br />
Hey, who's in charge here?”<br />
</center>
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