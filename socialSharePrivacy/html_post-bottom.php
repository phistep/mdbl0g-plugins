<?php
if($DATA['type'] == 'post'){
?>
<div id="socialshareprivacy"></div>
<!-- socialSharePrivacy -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>plugins/socialSharePrivacy/socialshareprivacy/jquery.socialshareprivacy.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($){
	  if($('#socialshareprivacy').length > 0){
	    $('#socialshareprivacy').socialSharePrivacy({
			services : {
				twitter : {
					'tweet_text' : '<?php echo htmlspecialchars(trim($DATA['postTitle'])); ?>',
					'dummy_img' : '<?php echo BASE_URL.'plugins/socialSharePrivacy/socialshareprivacy/socialshareprivacy/images/dummy_twitter.png'; ?>'
				},
				facebook : {
					'dummy_img' : '<?php echo BASE_URL.'plugins/socialSharePrivacy/socialshareprivacy/socialshareprivacy/images/dummy_facebook.png'; ?>'
				},
				gplus : {
					'dummy_img' : '<?php echo BASE_URL.'plugins/socialSharePrivacy/socialshareprivacy/socialshareprivacy/images/dummy_gplus.png'; ?>'
				}
			},
			'css_path' : '<?php echo BASE_URL.'plugins/socialSharePrivacy/socialshareprivacy/socialshareprivacy/socialshareprivacy.css'; ?>',
			'uri' : '<?php echo $DATA['postLink']; ?>'
		}); 
	  }
	});
</script>
<!-- end socialSharePrivacy -->
<?php
}
?>