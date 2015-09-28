<!doctype html>
<html>
<head>
<title>Ping!</title>
<style>
@font-face {
	font-family: myriad;
	src: url('myriad.otf');
}
body, html {
	font-family: Consolas, monospace;
	margin: 0 auto;
	padding: 0px;
	height: 100%;
	/*background-color: rgba(0,0,0,0.1);*/

}
#container {
	width: 100%;
	height: 100%;
	border: 0px;
	margin: 0px;
	padding: 0px;
	border-collapse: collapse;

}
#leftcol {
	font-size: 6em;
/*background-color: rgba(0,0,0,0.9);*/
/*color: white;*/
letter-spacing: 10px;
text-align: center;
}
a {
	text-decoration: none;
}
</style>

</head>

<body>
<table id="container" width="100%">
	<tr>
		<td id="leftcol" width="100%">
			> ping<span id="dis">_</span>
		</td>
	</tr>
</table>
</body>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/smooth.min.js"></script>
<script>
$(document).keypress(function(e) {
	if (e.which == 13) {
		alert('hi');
		// window.location.href="home.php";
	}
})
var flag = 0;
window.setInterval(function() {
	if (flag ==0) {
$('#dis').animate({opacity: 0}, 300);

		flag = 1;
	}
	else {
$('#dis').animate({opacity: 1}, 300);

		flag = 0;
	}
}, 800);

</script>
</html>