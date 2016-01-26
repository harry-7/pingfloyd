<?php 
// Get the ID of a given category
    $news_and_thought = get_cat_ID( 'News and Thought' );
    $campus_buzz = get_cat_ID( 'Campus Buzz' );
    $fun_stuff = get_cat_ID( 'Fun Stuff' );
    $creativity_wall = get_cat_ID( 'Creativity Wall' );
?>
<!doctype html>
<!-- Author: Mrinal Dhar - http://mrinaldhar.com -->
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
	background-color: rgba(0,0,0,0);
	overflow: hidden;
}
#top_left {
	font-family: consolasfont;
	position: absolute;
	width: 50%;
	height: 50%;
	color: black;
	left: 10px;
	top: 10px;
	font-size: 2em;
	z-index: 100;
}
#bottom_nav {
	width: 100%;
	position: absolute;
	bottom: 0;
	left: 0;
	max-height: 45%;
	border-collapse: collapse;
	box-sizing: border-box;
}

#bottom_nav tr td{
	vertical-align: top;
	padding: 20px;
	text-align: center;
	/*border-radius: 2px;*/
	margin: 20px;
	box-sizing: border-box;
	z-index: 100;
}
.category_header {
	z-index: 100;
	font-size: 2em;
	display: block;
	margin-bottom: 30px;
	width: 100%;
	cursor: pointer;
}
.blue {
	background-color: #283593;
	color: white;
	opacity: 0;
}
.green {
	background-color: #2E7D32;
	color: white;
	opacity: 0;


}
.red {
	background-color: #BF360C;
	color: white;
	opacity: 0;


}
.brown {
	background-color: #004D40;
	color: white;

	opacity: 0;

}
a {
	color: white;

}
.category_article_list {
	width: 100%;
	z-index: 100;
	list-style-type: none;
	text-align: left;
	list-style-position: left;
	margin: 0px;
	padding: 0px;
}
.category_article_list li {
	padding: 10px;
	cursor: pointer;
}
.category_article_list li:hover {
	background-color: rgba(0,0,0,0.5);
}
#top_logo_main {
	z-index: 100;
	width: 50%;
	opacity: 0;

	position: absolute;
	top: 10%;
	left: 25%;
	text-align: center;
}
#logo_subtext {
	font-family: myriadl;
	font-size: 1.5em;
	padding-top: 20px;
}
#logo_text {
	font-family: exo;
	font-size: 7em;
}
#searchvalue {
	color: black;
	border: 2px solid black;
	border-radius: 5px;
	padding: 5px;
}
#searchform {
	/*margin-top: 30px;*/
	position: fixed;
	top: 40px;
	right: 20px;
	width: 25%;
	opacity: 0;
}
#colorizer_1 {
position: fixed;
z-index: 0;
top: 0;
left: 0;
width: 0%;
text-align: left;
opacity: 1;
height: 4px;
background: #003156;
}
#colorizer_2 {
position: fixed;
z-index: 0;
top: 0;
left: 25%;
width: 0%;
text-align: left;
opacity: 1;
height: 4px;
background: #003156;
}
#colorizer_3 {
position: fixed;
z-index: 0;
top: 0;
left: 50%;
width: 0%;
text-align: left;
opacity: 1;
height: 4px;
background: #003156;
}
#colorizer_4 {
position: fixed;
z-index: 0;
top: 0;
left: 75%;
width: 0%;
text-align: left;
opacity: 1;
height: 4px;
background: #003156;
}
</style>

</head>

<body>
	<div id="top_left" width="10%">
			> ping<span id="dis">_</span>
		</div>

		<table id="top_logo_main">
			<tr>
				<td width="100%" id="logo_text">
					Ping!
				</td>
			</tr>
			<tr>
				<td width="100%" id="logo_subtext">
					IIIT-Hyderabad's all new online newsletter
				</td>
			</tr>
			<!-- <tr> -->
				<!-- <td width="100%"> -->
					
				<!-- </td> -->
			<!-- </tr> -->
		</table>
		<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="text" name="s" id="searchvalue" placeholder="Search for an article!" />
					</form>
<!-- <div id="colorizer"></div> -->
<div id="colorizer_1"></div>
<div id="colorizer_2"></div>
<div id="colorizer_3"></div>
<div id="colorizer_4"></div>

<table id="bottom_nav">
<tr>
	<td width="25%" class="red">
		<a href="<?php echo esc_url( get_category_link( $news_and_thought ) ); ?>" class="anim">
			<span class="category_header">
				News &amp; Thought
			</span>
		</a>
			<ul class="category_article_list">
				<?php 
				$category_name = "News and Thought";
				global $wp_query;
				$original_query = $wp_query;
				$wp_query = null;
				$args = Array('posts_per_page'=> 7, 'category_name'=> $category_name, 'post_status' => array('publish') );
				$wp_query = new WP_Query( $args );
				if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a href="<?php echo the_permalink() ?>">
					<li class="anim">
					
					<?php the_title(); ?>
				</li>
					</a>

				<?php endwhile; endif;
				$wp_query = null;
				$wp_query = $original_query;
				wp_reset_postdata();
				?>
			</ul>
	</td>
	<td width="25%" class="blue">
		<a href="<?php echo esc_url( get_category_link( $campus_buzz ) ); ?>" class="anim">
			<span class="category_header">
			Campus Buzz
		</span>
	</a>
		<ul class="category_article_list">
				<?php 
				$category_name = "Campus Buzz";
				global $wp_query;
				$original_query = $wp_query;
				$wp_query = null;
				$args = Array('posts_per_page'=> 7, 'category_name'=> $category_name, 'post_status' => array('publish') );
				$wp_query = new WP_Query( $args );
				if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php echo the_permalink() ?>">

				<li class="anim">
					<?php the_title(); ?>
				</li>
					</a>

				<?php endwhile; endif;
				$wp_query = null;
				$wp_query = $original_query;
				wp_reset_postdata();
				?>
			</ul>
	</td>
	<td width="25%" class="brown">
		<a href="<?php echo esc_url( get_category_link( $creativity_wall ) ); ?>" class="anim">
			<span class="category_header">
			Creativity Wall
		</span>
	</a>
		<ul class="category_article_list">
				<?php 
				$category_name = "Creativity Wall";
				global $wp_query;
				$original_query = $wp_query;
				$wp_query = null;
				$args = Array('posts_per_page'=> 7, 'category_name'=> $category_name, 'post_status' => array('publish') );
				$wp_query = new WP_Query( $args );
				if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php echo the_permalink() ?>">

				<li class="anim">
					<?php the_title(); ?>
				</li>
					</a>

				<?php endwhile; endif;
				$wp_query = null;
				$wp_query = $original_query;
				wp_reset_postdata();
				?>

			</ul>
	</td>
	<td width="25%" class="green">
		<a href="<?php echo esc_url( get_category_link( $fun_stuff ) ); ?>" class="anim">
			<span class="category_header">
			Fun Stuff
		</span>
	</a>
		<ul class="category_article_list">
				<?php 
				$category_name = "Fun Stuff";
				global $wp_query;
				$original_query = $wp_query;
				$wp_query = null;
				$args = Array('posts_per_page'=> 7, 'category_name'=> $category_name, 'post_status' => array('publish') );
				$wp_query = new WP_Query( $args );
				if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php echo the_permalink() ?>">

				<li class="anim">
					<?php the_title(); ?>
				</li>
					</a>

				<?php endwhile; endif;
				$wp_query = null;
				$wp_query = $original_query;
				wp_reset_postdata();
				?>
			</ul>
	</td>
</tr>
</table>
</body>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/smooth.min.js"></script>
<script>
var colorLoop;
$(document).keypress(function(e) {
	if (e.which == 13) {
		init();
 		$('body').css({"background-color": "#FFFFFF"});
		$('.red').animate({opacity: 1}, 300);

		$('.blue').animate({opacity: 1}, 300);

		$('.brown').animate({opacity: 1}, 300);

		$('.green').animate({opacity: 1}, 300);
		window.clearInterval(colorLoop);
 		$('#top_logo_main').animate({opacity: 1}, 300);
 		$('#top_left').animate({opacity: 0}, 300);
 		$('#searchform').animate({opacity: 1}, 300);
 		colorizer();
	}
});
$(document).ready(function() {
	// window.setTimeout(function() {
		// init();
		colorLoop = window.setTimeout(colorizer, 2000);
	// }, 1000);
});
function init() {
	$('body').animate({"background-color": "white"}, 300);
}
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

var color_phase = 1;
function colorizer() {
	var bgcolor = 0;
		bgcolor = "#BF360C";
		$('#colorizer_1').css({"background-color": bgcolor});
		$('.red').animate({opacity: 1}, 300);

		 $("#colorizer_1").animate({ width: "25%" }, 300, function() {
			 	bgcolor = "#283593";
				$('#colorizer_2').css({"background-color": bgcolor});
				$('.blue').animate({opacity: 1}, 300);

				 $("#colorizer_2").animate({ width: "25%" }, 300, function() {
					bgcolor = "#004D40";
					$('#colorizer_3').css({"background-color": bgcolor});
					$('.brown').animate({opacity: 1}, 300);

						 $("#colorizer_3").animate({ width: "25%" }, 300, function() {
							bgcolor = "#2E7D32";
							$('#colorizer_4').css({"background-color": bgcolor});
								$('.green').animate({opacity: 1}, 300);

									 $("#colorizer_4").animate({ width: "25%" }, 300, function() {
									 	bgcolor = "#FFFFFF";
										window.clearTimeout(colorLoop);
								 		$('#top_logo_main').animate({opacity: 1}, 300);
								 		$('#searchform').animate({opacity: 1}, 300);
								 		$('#top_left').animate({opacity: 0}, 300);
									 });

								});

						});
		});
		
}

</script>
</html>
