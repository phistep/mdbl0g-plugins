<?php
if(preg_match("/admin/", getcwd()) && isset($_GET['disqus-shortname']))
	file_put_contents(BASE_PATH."plugins/disqus/html_head.php", "<?php\ndefine('DISQUS_SHORTNAME', \"".$_GET['disqus-shortname']."\");\n?>");

?>
