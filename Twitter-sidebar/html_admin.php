<?php
include(BASE_PATH."plugins/Twitter-sidebar/html_head.php");
if(TWITTER_USERNAME == ""){
?>
Set your Twitter @Username: <form method="get"><input type="text" name="twitter-username"><input type="submit" value="Save"></form>
<?php
}
else
	echo "Your Twitter widget is ready to go!<br>You can also configure your own Twitter widget <a href=\"https://twitter.com/about/resources/widgets/widget_profile\" targe=\"_blank\">here</a> and paste the result in the <code>plugins/Twitter-sidebar/html_aside.html</code> file.";
?>