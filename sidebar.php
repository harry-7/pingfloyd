<div id="sidebar">
	<h2 class="sidebar_title">Popular Tags</h2>
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
<hr />
<?php
$popular_posts = wp_get_recent_posts();
?>
<h2 class="sidebar_title">Popular Articles</h2>
<ul id="popular_articles_area">
<?php
foreach( $popular_posts as $post ){
		echo '<a href="' . get_permalink($post["ID"]) . '">';
		echo '<li class="article anim"><span class="article_title">';
		echo $post["post_title"].'</span><span class="article_desc">';
		echo 'Posted on ' . get_the_time('F jS, Y', $post["ID"]) . ' by ' . get_the_author($post["ID"]) . '';
		echo '</span></li></a>';
	}
	?>
</ul>

</div>