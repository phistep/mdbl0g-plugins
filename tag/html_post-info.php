<?php
if($data['type'] == 'post' && count($data['tags']) > 0){
	echo "<ul class=\"tags\">\n";
	foreach($data['tags'] as $tag)
		echo "<li class=\"tag animated swing\"><a href=\"".BASE_URL.(PRETTY_URLS ? "search/%25" : "?q=%25" ).urlencode($tag)."\">".$tag."</a></li>\n";
	echo "</ul>\n";

}
?>