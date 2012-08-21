<?php
if(preg_match("/admin/", getcwd()) && isset($_POST['piwik-url']) && isset($_POST['piwik-site-id'])){
	if(substr($_POST['piwik-url'], -1) != '/') 
	    $_POST['piwik-url'] .= '/';
	file_put_contents(BASE_PATH."plugins/Piwik-analytics/html_head.php", "<?php\ndefine('PIWIK_URL', \"".$_POST['piwik-url']."\");\ndefine('PIWIK_SITE_ID', \"".$_POST['piwik-site-id']."\");\n?>");
}
?>
