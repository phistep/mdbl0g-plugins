<?php
define('ABSTRACTOR_CHAR_COUNT', 500);
define('ABSTRACTOR_ELLIPSIS', "&hellip;");

if($type != 'post'){
	$len = strlen($DATA['contentHtml']);
	if ($len > ABSTRACTOR_CHAR_COUNT) {
		preg_match('/(.{'.ABSTRACTOR_CHAR_COUNT.'}.*?)\b/', $DATA['contentHtml'], $matches);
		$DATA['contentHtml'] = rtrim($matches[1]).'<span class="ellipsis">'.ABSTRACTOR_ELLIPSIS.'</span>';
	}
}
?>