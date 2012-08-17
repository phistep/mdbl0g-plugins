<?php
include(BASE_PATH."plugins/disqus/html_head.php");
if(DISQUS_SHORTNAME == ""){
?>
Set your disqus shortname: <form method="get"><input type="text" name="disqus-shortname"><input type="submit" value="Save"></form>
<?php
}
else
	echo "You can configure your disqus settings in the the <a href=\"http://".DISQUS_SHORTNAME.".disqus.com/admin\">disqus Admin Panel</a>.";
?>