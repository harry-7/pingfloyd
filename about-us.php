<?php /* Template Name: TeamPing */ ?>

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
	font-size: 1em;
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
	<h1 id="page_title">Team Ping!</h1>
	<hr />
	<p>
	<br />
	<strong>Mounika Somisetty</strong>, &nbsp;&nbsp;Editor-in-chief<br />
	Defines the editorial line - the complete look and feel of the journal. This includes defining and enforcing the limits of what should and should not be published i.e the policy. 
	<br /><br /><br />
	<strong>Vatika Harlalka &amp; Akanksha Srivastava</strong>, &nbsp;&nbsp;Managing Editors<br />
	Oversee the work done by all the associate editors and make sure that there is cohesion between all the sections and maintain balance. 
	<br /><br /><br />
 	<strong>Mrinal Dhar</strong>, &nbsp;&nbsp;Design Admin<br />
	Responsible for ideation and development of website's user interface and coordinating all design decisions, in association with the managing editors and editor-in-chief.
	<br /><br /><br />
	<strong>Nisarg Jhaveri</strong>, &nbsp;&nbsp;Web Admin<br />
	Responsible for maintaining the website and any related matters.
	<br /><br /><br />
	<strong>Sriharsh, Anurag, Sneha, Shreedhar &amp; Tanmay</strong>, &nbsp;&nbsp;Associate Editors<br />
 	Responsible for the articles written and to be written by the staff writers of their respective sections. 
 	<br /><br /><br />
 	<strong>Isha Mangurkar</strong>, &nbsp;&nbsp;Digital Manager &amp; Graphics Editor<br />
	Manages all multi-media that goes along with all content in order to both ensure sufficient content and make sure no copyrights are violated in any use of multimedia.
	<br /><br /><br />
	<strong>Sneha Nanavati</strong>, &nbsp;&nbsp;Social Media Manager<br />
	Responsible for creating and maintain pages on various social media accounts. This includes actively moderating comments and sharing articles.
	<br /><br />
	<hr />
	<div class="footer">
<a href="http://mrinaldhar.com">Website designed by Mrinal Dhar</a>
</div>
</p>
</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
</div>
</body>
</html>