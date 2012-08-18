<?php
if(preg_match("/q=/", $_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'], $url_query);
	$html = preg_replace("/".$url_query['q']."/i", "<mark>".$url_query['q']."</mark>", $html);
}
?>