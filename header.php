<?php 
// Get the ID of a given category
    $news_and_thought = get_cat_ID( 'News &amp; Thought' );
    $campus_buzz = get_cat_ID( 'Campus Buzz' );
    $fun_stuff = get_cat_ID( 'Fun Stuff' );
    $creativity_wall = get_cat_ID( 'Creativity Wall' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );

?>
<div id="header">
	<table id="herobar" width="80%" align="center">
	<tr>
		<td width="25%">
			<span id="logo_hero"><a href="<?php bloginfo('url'); ?>">Ping!</a></span>
		</td>
		<td width="50%">
			<table id="navbar" width="100%" align="center">
				<tr>
					<a href="<?php echo esc_url( get_category_link( $news_and_thought ) ); ?>">
						<td width="25%" class="anim">
						News &amp; Thought
						</td></a>
					<a href="<?php echo esc_url( get_category_link( $campus_buzz ) ); ?>">
						<td width="25%" class="anim">
						Campus Buzz</a>
						</td></a>
					<a href="<?php echo esc_url( get_category_link( $creativity_wall ) ); ?>">
						<td width="25%" class="anim">
						Creativity Wall</a>
						</td></a>
					<a href="<?php echo esc_url( get_category_link( $fun_stuff ) );  ?>">
						<td width="25%" class="anim">
						Fun Stuff</a>
						</td></a>
				</tr>
			</table>
		</td>
		<td width="25%" style="text-align: right;">
			<table id="searchbar" align="right" width="90%">
				<tr>
					<td align="right" width="10%">
			<i id="searchicon" class="material-icons">search</i>
		</td>
			<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

		<td width="90%">
			<input type="text" name="s" id="searchvalue" value="<?php echo get_search_query(); ?>" />
		</td>
		</form>

	</tr></table>
		</td>
	</tr>
</table>
			
		</td>
	</tr>
</table>
</div>