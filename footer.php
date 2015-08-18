<?php
if (is_front_page() || is_home()) { // Home page
    // For now, do nothing
}
else { // Not home page
?>
<div id="footer">
	<table width="100%">
	<tr>
		<td width="30%"><a class="anim" href="<?php echo get_page_link( get_page_by_title( 'Team Ping' )->ID ); ?>">About Us</a></td>
		<td width="30%"><a class="anim" href="<?php echo get_page_link( get_page_by_title( 'Editorial Note' )->ID ); ?>">Editorial Note</a></td>
		<td width="30%"><a class="anim" href="<?php echo get_page_link( get_page_by_title( 'Send us an article!' )->ID ); ?>">Send us an article</a></td>
	</tr>
</table>
</div>
<?php
} // Not home page

// Next part is for all
// Google Analytics
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66471327-1', 'auto');
  ga('send', 'pageview');

</script>
