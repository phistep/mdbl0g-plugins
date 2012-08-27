<?php
if($DATA['type'] == 'post'){
?>
<span class="instapaper_title" style="display:none;"><?php echo $DATA['postTitle']; ?></span>
<iframe border="0" scrolling="no" width="78" height="17" allowtransparency="true" frameborder="0"
 style="margin-bottom: -3px; z-index: 1338; border: 0px; background-color: transparent; overflow: hidden;"
 src="http://www.instapaper.com/e2?url=<?php echo urlencode($DATA['postLink']); ?>&title=<?php echo urlencode($DATA['postTitle']); ?>"
></iframe>
<?php
}
?>