<?php
if(preg_match("/admin/", getcwd()) && isset($_POST['upload-file'])){
	
	$uploadfile = $_FILES["file"];	
	$finfo = @finfo_open(FILEINFO_MIME_TYPE);
	
	if ($uploadfile["error"] > 0)
		alert("Error Uploading File: ".$uploadfile["error"], "error", BASE_URL."/admin/");
	
	$destinationfilename = mktime(date()).'_'.to_url($uploadfile["name"]);
	$destinationpath = BASE_PATH."plugins/upload/files/".$destinationfilename;
	$destinationurl = BASE_URL."plugins/upload/files/".$destinationfilename;
	
	if(!move_uploaded_file($uploadfile["tmp_name"], $destinationpath))
		echo "\nerror: ".$destinationpath;
	else{
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>static/css/style.css" media="all">
	<title><?php echo BLOG_TITLE; ?></title>
	<script type="text/javascript">
	function select_all(id){
		document.getElementById(id).focus();
		document.getElementById(id).select();
	}
	</script>
</head>
<body>
	<div class="alert success" style="width:400px;">
		<p><a href="<?php echo BASE_URL."/admin/"; ?>">Back to Admin Interface</a></p>
		<p>MIME-Type: <code><?php echo $mime = @finfo_file($finfo, $destinationpath); ?></code></p>
		<p>Link: <a href="<?php echo $destinationurl; ?>" targe="blank"><?php echo $destinationfilename; ?></a></p>
		<p>URL: <input id="url" onClick="select_all('url')" type="text" value="<?php echo $destinationurl; ?>" readonly></p>
		<p>Link: <input id="link" onClick="select_all('link')" type="text" value="<a href=&quot;<?php echo $destinationurl; ?>&quot;>" readonly></p>
		<p>Markdown Link: <input id="md-link" onClick="select_all('md-link')" type="text" value="<?php echo "[".$uploadfile["name"]."](".$destinationurl; ?>)" readonly></p>
		<?php if(preg_match("/^image\//", $mime)){ ?>
		<p>Image: <input id="img" type="text" onClick="select_all('img')" value="<img alt=&quot;<?php echo $uploadfile["name"]; ?>&quot; src=&quot;<?php echo $destinationurl; ?>&quot;>" readonly></p>
		<p>Markdown Image: <input id="md-img" onClick="select_all('md-img')" type="text" value="<?php echo "![".$uploadfile["name"]."](".$destinationurl; ?>)" readonly></p>
		<p><img style="max-width:400px" src="<?php echo $destinationurl; ?>"></p>
		<?php } ?>
	</div>
</body>
</html>
<?php } } ?>