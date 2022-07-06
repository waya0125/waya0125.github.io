<?php
require_once("php-markdown/Michelf/MarkdownExtra.inc.php");
use Michelf\MarkdownExtra;

if ( isset($_SERVER['PATH_TRANSLATED']) ) {
    $file = realpath($_SERVER['PATH_TRANSLATED']);
    $ext = substr($file, strrpos($file, '.') + 1);
}

if ( $file and is_readable($file) and $ext

===

 'md') {
    $html = MarkdownExtra::defaultTransform(file_get_contents($file));
} else {
    $html = '<p>cannot read file</p>';
}

?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="https://waya0125.com/settings/waya_site-markdown.css">
  </head>
  <body>
    <?php print $html; ?>
  </body>
</html>