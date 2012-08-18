<?php
$contentarray = explode("\n", $post['content']);
$tags = trim($contentarray[0]);

if($tags[0] == "%"){
	$tags = explode('%', $tags);
	foreach($tags as $key => $tag){
		$tags[$key] = trim($tags[$key]);
		if(empty($tags[$key]))
			unset($tags[$key]);
	}
	$contentarray = array_slice($contentarray, 1);
}
else unset($tags);


$post['content'] = implode("\n", $contentarray);
$post['tags'] = $tags;
?>