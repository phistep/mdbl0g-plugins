<?php
if(preg_match("/admin/", getcwd()) && isset($_GET['backup'])){
	$files = list_posts(BASE_PATH.'posts');

	$filename = to_url(BLOG_TITLE).'_backup_'.date("Y-m-d_H-i").'.zip';

	$zip = new ZipArchive;
	$zip->open($filename, ZipArchive::CREATE);
	foreach ($files as $file) {
	  $zip->addFile($file);
	}
	$zip->close();

	header('Content-Type: application/zip');
	header('Content-disposition: attachment; filename='.$filename);
	header('Content-Length: '.filesize($filename));
	readfile($filename);
}
?>
