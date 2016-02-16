<?php

header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL);

require_once('./vendor/autoload.php');

// Require "./include/WikiImport.php" if needed. This lets you to fetch information from DMC Wiki.
require_once("./include/WikiImport.php");
use DsvSu\Daisy;

$pagetitle = 'Status page';

$htmlfile = 'status.html';

$header_html = file_get_contents('html/header.html');

print str_replace('¤pagetitle', $pagetitle, $header_html);

include("html/css_example.html");
include("html/content.html");
include("html/footer.html");

?>
