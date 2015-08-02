<!doctype html>
<html>
<head>
<title>Ping!</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<style>
body, html {
	font-family: myriadl;
	margin: 0 auto;
	padding: 0px;
	height: 100%;
	background-color: rgba(0,0,0,1);
	overflow: hidden;
}
#container {
	width: 90%;
	height: 100%;
	border: 0px;
	margin: 0px;
	padding: 0px;
	border-collapse: collapse;
	background-color: rgba(0,0,0,1);
	color: white;
}
#leftcol {
	font-size: 6em;
/*background-color: rgba(0,0,0,0.9);*/
/*color: white;*/
letter-spacing: 10px;
text-align: center;
vertical-align: bottom;
height: 100%;
/*padding: 20px;*/
}
#rightcol {
	/*padding: 40px;*/
	text-align: center;
	/*line-height: 3em;*/
}
#title {
	font-size: 3em;
	letter-spacing: -1px;

}
#subtitle {
	font-size: 1.7em;
	line-height: 1em;
	/*padding-top: 0px;*/
}
#pagetext {
	font-size: 1.1em;
}
a {
	text-decoration: none;
}
#header {
	/*border-bottom: 0px;*/
	background-color: rgba(0,0,0,1);
	border-bottom: 3px solid rgba(255,255,255,0.9);

} 
#kalam-hero {
	max-width: 80%;
	vertical-align: bottom;
}
</style>

</head>

<body>
	<?php get_header(); ?>

<table id="container" width="80%">
	<tr>
		<td id="leftcol" width="60%">
			<img id="kalam-hero" src="<?php echo get_template_directory_uri(); ?>/kalam.png" />
		</td>
		<td id="rightcol" width="40%">
			<span id="title">Dr. APJ Abdul Kalam</span>
			<br />
			<span id="subtitle"><small>1931 - 2015</small></span>
			<br /><br /><br />
			<span id="pagetext">
				We are deeply saddened by his sudden demise. <br />The world will remember him as an Inventor, a Scientist, a beloved Icon, a President.<br /><br />Dr. Kalam, <i>the</i> teacher. 
			</span>
		</td>
	</tr>
</table>


</body>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/smooth.min.js"></script>
<script>


</script>
</html>