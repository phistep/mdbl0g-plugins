<?php
function generateTagCloud(){
	
	$taglist = array();
	$files = list_posts(BASE_PATH.'posts');
	if (!empty($files)){
		foreach($files as $filename){
			$post = post_details(BASE_PATH."posts/".$filename);
			if(!empty($post['tags']))
				$taglist = array_merge($taglist, $post['tags']);
		}
		$alltags = array_count_values($taglist);
		
		asort($alltags);
		$i = 0;
		
		foreach($alltags as $tag => $freq){
			$i++;
			if($i == 1){
				$old = $freq;
				$alltags[$tag] = 1;
			}
			$new = $fraq;
			if($frag > $old)
				$alltags[$tag] = $old + 1;
			else
				$alltag[$tag] = $old;
			$old = $new;
		}
		
		$factor = max($alltags) / 9;
		
		foreach($alltags as $tag => $scale)
			$alltags[$tag] = ceil($scale / $factor);
			
		ksort($alltags);
		
		foreach($alltags as $tag => $scale){
			echo "<a href=\"".BASE_URL.(PRETTY_URLS ? "search/%25" : "?q=%25" ).urlencode($tag)."\"><span class=\"tag tag".$scale."\">".htmlspecialchars($tag)."</span></a>\n";
		}
	}
	else
		echo STR_TOOLBOX_STANDARD_NOTAGS;
}
echo 'Tags:<br><br><div class="tagcloud">';
generateTagCloud($db);
echo '</div>';
?>