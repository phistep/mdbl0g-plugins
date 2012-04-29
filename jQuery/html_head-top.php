
<?php
define('JQUERY_VERSION', '1.4');
define('JQUERY_MINIFIED', true);
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/'.JQUERY_VERSION.'/jquery.'.(JQUERY_MINIFIED ? 'min.' : '').'js"></script>';
?>
