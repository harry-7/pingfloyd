<?php
$args = array( 'number' => '15', 'orderby' => 'count', 'order' => 'desc' );
$tags_array = get_tags( $args ); ?> 
<div id="sidebar">
	<h2 class="sidebar_title">Popular Tags</h2>
<ul class="tags_area">
<?php 
	foreach ( $tags_array as $tag ) {
	$tag_link = get_tag_link( $tag->term_id );
			
	echo "<li class='tag anim'><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
	echo "{$tag->name}</a></li>";
}
?>

</ul>
<hr />
<?php
$args = array( 'numberposts' => '5' );
$popular_posts = wp_get_recent_posts($args);
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