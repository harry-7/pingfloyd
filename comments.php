
<div id="comments">
	<h3>Comments</h3>
	<hr />
	<table id="comments_table">
		<?php if ( have_comments() ) : 
		$comments = get_comments();
		foreach($comments as $comment) : 
			if ($comment->comment_approved == 1) :?>
		<tr>
			<td>
				<span class="comment_text">
					&ldquo; <?php echo $comment->comment_content; ?> &rdquo;
				</span>
				<span class="comment_desc">
					by <?php echo $comment->comment_author . ' on ' . get_comment_date() . ' at ' . get_comment_time(); ?>
				</span>
			</td>
		</tr>
<?php endif; endforeach; endif; // end have_comments() ?>
	

		<tr>
			<td>
				<form id="comment_form" action="<?php echo esc_url( home_url( '/wp-comments-post.php' ) ); ?>" method="POST">
					<textarea id="comment" name="comment" aria-describedby="form-allowed-tags" aria-required="true" required="required" placeholder="What are your views on this?"></textarea>
						<input name="submit" type="submit" id="submit" class="submit anim tag" value="Post Comment">
						<input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
						<input type="hidden" name="comment_parent" id="comment_parent" value="0">


				</form>
			</td>
		</tr>
		<tr>
			<td>

			</td>
		</tr>

	</table>
</div>