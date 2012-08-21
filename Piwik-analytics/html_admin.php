<?php
include(BASE_PATH."plugins/Piwik-analytics/html_head.php");
if(PIWIK_URL == "" || PIWIK_SITE_ID == ""){
?>
<form method="post">Your Piwik URL:<input type="url" name="piwik-url" value="http://"><br>Your Piwik Site ID (probably "1"): <input type="number" name="piwik-site-id" value="1"><input type="submit" value="Save"></form>
<?php
}
else
	echo "Piwik Analytics is set up!<br>You can view the stats at your <a href=\"".PIWIK_URL."\" targe=\"_blank\">Piwik Page</a>.";
?>