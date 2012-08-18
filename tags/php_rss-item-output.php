<?php
if(count($post['tags']) > 0)
	foreach($post['tags'] as $tag)
		echo "<category><![CDATA[".htmlspecialchars($tag)."]]></category>\n";
?>