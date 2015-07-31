<?php /* Template Name: Category */ ?>

<html>
<head>
<title>Ping!<?php echo wp_title(); ?></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<style>
.container {
	width: 80%;
	margin-left: 10%;
}

</style>

</head>
<body>
<div id="wrapper">
	<?php get_header(); ?>
<div id="main">

<div class="container">
	<div class="col-md-12">Ho</div>
	<div id="page_title" class="col-md-12"><?php single_cat_title(); ?></div>

	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3">a</div>
			<div class="col-md-3">b</div>
			<div class="col-md-3">c</div>
			<div class="col-md-3">d</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3">e</div>
			<div class="col-md-3">f</div>
			<div class="col-md-3">g</div>
			<div class="col-md-3">h</div>
		</div>
	</div>

</div>


</div>
<div id="delimiter">
</div>
</div>
</body>
</html>