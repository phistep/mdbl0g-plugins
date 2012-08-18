<?php
define('HIGHLIGHTJS_THEME', 'Ascetic');
echo '<link rel="stylesheet" href="'.BASE_URL.'plugins/syntax-highlighter/highlight/styles/'.strtolower(HIGHLIGHTJS_THEME).'.css">';
echo '<script src="'.BASE_URL.'plugins/syntax-highlighter/highlight/highlight.pack.js"></script>';
?>
<script>hljs.initHighlightingOnLoad();</script>
