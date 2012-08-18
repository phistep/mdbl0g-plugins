<?php
if(preg_match("/admin/", getcwd()) && isset($_GET['twitter-username']))
	file_put_contents(BASE_PATH."plugins/Twitter-sidebar/html_head.php", "<?php\ndefine('TWITTER_USERNAME', \"".$_GET['twitter-username']."\");\n?>");

?>
