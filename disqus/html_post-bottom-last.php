<?php if($DATA['type'] == 'post'){ ?>
<div id="disqus_thread"></div>
<script>
var disqus_config = function () {
		this.page.url = "<?php echo $DATA['postLink']; ?>";  // Replace PAGE_URL with your page's canonical URL variable
		this.page.identifier = "<?php echo $_GET['p']; ?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
(function() {
		var d = document, s = d.createElement('script');
		s.src = 'https://<?php echo DISQUS_SHORTNAME; ?>.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php } ?>
